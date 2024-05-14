<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {
        $invoices = Invoice::all();
        return view('invoices.index', compact('invoices'));
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
}