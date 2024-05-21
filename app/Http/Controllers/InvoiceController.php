<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;
use App\Models\Counter;
use App\Models\Local;
use Illuminate\Support\Facades\DB;

class InvoiceController extends Controller
{
    public function index(Request $request)
    {
        $reference = $request->input('reference');
        $from_date = $request->input('from_date');
        $to_date = $request->input('to_date');
        $local_id = $request->input('local');

        $invoices = Invoice::query();

        if ($reference) {
            $invoices->where('reference', 'like', '%' . $reference . '%');
        }

        if ($from_date) {
            $invoices->whereDate('date', '>=', $from_date);
        }

        if ($to_date) {
            $invoices->whereDate('date', '<=', $to_date);
        }

        if ($local_id) {
            $invoices->where('local_id', $local_id);
        }

        $invoices = $invoices->get();
        $locals = Local::all();

        return view('invoices.index', compact('invoices', 'locals'));
    }

    public function create()
    {
        return view('invoices.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'date' => 'required|date',
            'issue_date' => 'required|date',
            'due_date' => 'required|date',
            'amount' => 'required|numeric',
            'payment_status' => 'required|in:' . implode(',', Invoice::$PAYMENT_STATUSES),
            'period' => 'required|in:' . implode(',', Invoice::$PERIODS),
            'local_id' => 'required|integer',
        ]);

        $invoice = Invoice::create($validatedData);

        return response()->json([
            'message' => 'Invoice created successfully.',
            'invoice' => $invoice,
        ]);
    }

    public function show(Invoice $invoice)
    {
        return view('invoices.show', compact('invoice'));
    }

    public function edit(Invoice $invoice)
    {
        return view('invoices.edit', compact('invoice'));
    }

    public function update(Request $request, Invoice $invoice)
    {
        $validatedData = $request->validate([
            'date' => 'required|date',
            'issue_date' => 'required|date',
            'due_date' => 'required|date',
            'amount' => 'required|numeric',
            'payment_status' => 'required|in:' . implode(',', Invoice::$PAYMENT_STATUSES),
            'period' => 'required|in:' . implode(',', Invoice::$PERIODS),
            'local_id' => 'required|integer',
        ]);

        $invoice->update($validatedData);

        return response()->json([
            'message' => 'Invoice updated successfully.',
            'invoice' => $invoice,
        ]);
    }

    public function destroy(Invoice $invoice)
    {
        $invoice->delete();

        return redirect()->route('invoices.index')->with('success', 'Invoice deleted successfully.');
    }


    public function submitForm(Request $request)
    {
        $validatedData = $request->validate([
            'serial_number' => 'required',
            'Type' => 'required',
            'address' => 'required',
        ]);

        $counter = Counter::where('serial_number', $validatedData['serial_number'])
            ->where('Type', $validatedData['Type'])
            ->first();

        $local = Local::where('address', $validatedData['address'])->first();

        if ($local && $counter) {
            $invoice = new Invoice;
            $invoice->id_local = $local->id; // Set the id_local to the ID of the found Local
            $invoice->save();

            if ($invoice->id) {
                // Link the invoice to the counter
                DB::table('counter_invoice')->insert([
                    'id_invoice' => $invoice->id,
                    'id_counter' => $counter->id,
                ]);

                return response()->json(['message' => 'Form submitted successfully']);
            } else {
                return response()->json(['message' => 'Invoice creation failed'], 500);
            }
        } else {
            return response()->json(['message' => 'Local or Counter not found'], 404);
        }
    }

    public function getInvoiceReference($term)
    {
        $references = Invoice::where('reference', 'like', '%' . $term . '%')
            ->pluck('reference');
    
        return response()->json($references);
    }
}
