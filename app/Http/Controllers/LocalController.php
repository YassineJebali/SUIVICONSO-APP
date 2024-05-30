<?php

namespace App\Http\Controllers;

use App\Models\Local;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Region;
use App\Models\Counter;
use App\Models\Invoice;

class LocalController extends Controller
{
    

    public function index(Request $request)
    {
        $regions = Region::all();
        $locals = Local::when($request->region_id, function ($query, $region_id) {
            return $query->where('region_id', $region_id);
        })->get();
    
        return view('locals.index', compact('locals', 'regions'));
    }

    public function show($id)
    {
        $local = Local::find($id);
        $counters = $local->counters;
    
        // Fetch and format the invoice data for gas, water, and electricity
        $gasData = $this->getInvoiceData($counters, 'gas');
        $waterData = $this->getInvoiceData($counters, 'water');
        $electricityData = $this->getInvoiceData($counters, 'electricity');
    
        return view('locals.show', ['local' => $local, 'counters' => $counters, 'gasData' => $gasData, 'waterData' => $waterData, 'electricityData' => $electricityData]);
    }
    
    private function getInvoiceData($counters, $type)
    {
        $counter = $counters->where('type', $type)->first();
        if ($counter) {
            $invoices = $counter->invoices()->orderBy('date', 'desc')->get();
    
            return $invoices->map(function($invoice) {
                $issue_date = \Carbon\Carbon::parse($invoice->issue_date);
                return [
                    'year' => $issue_date->format('Y'),
                    'month' => $issue_date->format('M'),
                    'consumption' => $invoice->consumption
                ];
            });
        }
    
        return collect();
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            // Add your validation rules here
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $local = Local::create($request->all());
        return response()->json($local, 201);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            // Add your validation rules here
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $local = Local::find($id);
        if ($local) {
            $local->update($request->all());
            return response()->json($local);
        } else {
            return response()->json(['error' => 'Local not found'], 404);
        }
    }

    public function destroy($id)
    {
        $local = Local::find($id);
        if ($local) {
            $local->delete();
            return response()->json(['message' => 'Local deleted']);
        } else {
            return response()->json(['error' => 'Local not found'], 404);
        }
    }

    public function getAddresses($query)
    {
        $locals = Local::where('address', 'like', "%$query%")->get();
        return response()->json($locals->pluck('address'));
    }
}
