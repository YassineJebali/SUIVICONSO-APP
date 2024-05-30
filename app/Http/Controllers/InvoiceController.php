<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;
use App\Models\Counter;
use App\Models\Local;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf as Pdf;


class InvoiceController extends Controller
{
    /**
     * Display a listing of the invoices.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {
        // Get the input parameters from the request
        $reference = $request->input('reference');
        $from_date = $request->input('from_date');
        $to_date = $request->input('to_date');
        $local_id = $request->input('local');
        $payment_status = $request->input('payment_status');

        // Start building the query for fetching invoices
        $invoices = Invoice::query();

        // Apply filters based on input parameters
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
        if ($payment_status) {
            $invoices->where('payment_status', $payment_status);
        }

$invoices->orderBy('date', 'desc');

        // Fetch the invoices and locals
        $invoices = $invoices->get();
        $locals = Local::all();

        // Return the view with the invoices and locals
        return view('invoices.index', compact('invoices', 'locals'));
    }

    /**
     * Show the form for creating a new invoice.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('invoices.create');
    }

    /**
     * Store a newly created invoice in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'date' => 'required|date',
            'issue_date' => 'required|date',
            'due_date' => 'required|date',
            'amount' => 'required|numeric',
            'payment_status' => 'required|in:' . implode(',', Invoice::$PAYMENT_STATUSES),
            'period' => 'required|in:' . implode(',', Invoice::$PERIODS),
            'local_id' => 'required|integer',
        ]);

        // Create a new invoice with the validated data
        $invoice = Invoice::create($validatedData);

        // Return a JSON response with the success message and the created invoice
        return response()->json([
            'message' => 'Invoice created successfully.',
            'invoice' => $invoice,
        ]);
    }

    /**
     * Show the specified invoice.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Contracts\View\View
     */
    public function show(Invoice $invoice)
    {
        return view('invoices.show', compact('invoice'));
    }


    /**
     * Show the form for editing the specified invoice.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Contracts\View\View
     */
    public function edit(Invoice $invoice)
    {
        $locals = Local::all();
        return view('invoices.edit', compact('invoice', 'locals'));
    }

    /**
     * Update the specified invoice in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, Invoice $invoice)
    {
        try {
            $validatedData = $request->validate([
                'reference' => 'required',
                'issue_date' => 'required|date',
                'due_date' => 'required|date',
                'pleasePayBefore' => 'required|date',
                'nextIndexReading' => 'required|date',
                'local_id' => 'required|exists:locals,id',
                'amount' => 'required|numeric',
                'consumption' => 'required|numeric',
            ]);
    
            $counter_id = $request->validate([
                'counter_id' => 'required|exists:counters,id',
            ]);
    
            $invoice->update($validatedData);
    
            // Update the counter relationship
            $invoice->counters()->sync([$counter_id['counter_id']]);
    
            session()->flash('success', 'Invoice updated successfully.');
    
            // Redirect to the show view
            return redirect()->route('invoices.show', ['invoice' => $invoice->id]);
        } catch (\Exception $e) {
            session()->flash('error', 'Failed to update invoice.');
    
            return back()->withInput();
        }
    }
    /**
     * Remove the specified invoice from storage.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $invoice = Invoice::find($id);
        $invoice->delete();
    
        return redirect()->route('invoices.index')->with('success', 'Invoice deleted successfully');
    }

    /**
     * Submit the form data and create a new invoice.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
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

    /**
     * Get the invoice references that match the given term.
     *
     * @param  string  $term
     * @return \Illuminate\Http\JsonResponse
     */
    public function getInvoiceReference($term)
    {
        $references = Invoice::where('reference', 'like', '%' . $term . '%')
            ->pluck('reference');
    
        return response()->json($references);
    }
    public function getAddress($serialNumber)
    {
        // Fetch the counter associated with the serial number
        $counter = Counter::where('serial_number', $serialNumber)->first();

        // If the counter exists, fetch the associated local's address
        if ($counter) {
            $local = Local::find($counter->local_id);
            return response()->json($local->address);
        }

        // If the counter does not exist, return an error message
        return response()->json('No address found for this serial number', 404);
    }

    public function download(Invoice $invoice)
    {
        $counter = $invoice->counters()->first();
    
        if ($counter == null) {
            return response()->json(['message' => 'No counter found for this invoice'], 404);
        }
    
        $pdf = PDF::loadView('pdf', compact('invoice', 'counter'));
    
        return $pdf->download('invoice.pdf');
    }
    public function getCounters(Local $local)
    {
        $counters = $local->counters->pluck('serial_number', 'id');
        return response()->json($counters);
    }
    


}

