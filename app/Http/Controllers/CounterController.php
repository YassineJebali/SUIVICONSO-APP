<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Counter;
use App\Models\Local;
use Illuminate\Support\Facades\DB;

class CounterController extends Controller
{
    public function index(Request $request)
    {
        $counters = Counter::query();
    
        if ($request->has('counter_type') && $request->get('counter_type') != '') {
            $counters->where('type', $request->get('counter_type'));
        }
        if ($request->has('local') && $request->get('local') != '') {
            $counters->where('local_id', $request->get('local'));
        }
        // Add this block to filter by serial_number
        if ($request->has('serial_number') && $request->get('serial_number') != '') {
            $counters->where('serial_number', 'like', '%' . $request->get('serial_number') . '%');
        }
    
        $counters = $counters->get();
    
        $locals = Local::all();
    
        return view('counters.index', compact('counters', 'locals'));
    }

    public function create()
    {
        return view('counters.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'local_name' => 'required|exists:locals,name',
            'type' => 'required|in:gas,water,electricity',
            'serial_number' => 'required|unique:counters',
        ]);
    
        $local = Local::where('name', $validatedData['local_name'])->first();
    
        if (!$local) {
            return back()->withErrors(['local_name' => 'Local not found']);
        }
    
        $counter = Counter::create([
            'local_id' => $local->id,
            'type' => $validatedData['type'],
            'serial_number' => $validatedData['serial_number'],
        ]);
    
        return redirect('/counters')->with('success', 'Counter created successfully');
    }

    public function show($id)
    {
        $counter = Counter::find($id);
        $invoices = $counter->invoices()->orderBy('date', 'desc')->get();
    
        return view('counters.show', ['counter' => $counter, 'invoices' => $invoices]);
    }

    public function edit(Counter $counter)
    {
        return view('counters.edit', compact('counter'));
    }

    public function update(Request $request, Counter $counter)
    {
        $validatedData = $request->validate([
            'type' => 'required|max:255',
            'serial_number' => 'required|unique:counters,serial_number,' . $counter->id,
            'local_id' => 'required|exists:locals,id',
            'avg_consommation' => 'required|numeric',
        ]);

        $counter->update($validatedData);

        return response()->json(['message' => 'Counter updated successfully', 'counter' => $counter], 200);
    }

    public function destroy(Counter $counter)
    {
        $counter->delete();
        return response()->json(['message' => 'Counter deleted successfully'], 200);
    }
    public function getType($serial_number)
    {
        $counter = Counter::where('serial_number', $serial_number)->first();
        return response()->json(['type' => $counter->type]);
    }
    public function getSerials($query)
    {
        $counters = Counter::where('serial_number', 'like', "%$query%")->get();
        return response()->json($counters->pluck('serial_number'));
    }

    public function search(Request $request)
{
    $query = $request->get('query');
    $counters = Counter::where('serial_number', 'like', "%{$query}%")->get();
    return response()->json($counters);
}
    public function getLocalNames(Request $request)
    {
        $term = $request->input('term');

        $results = DB::table('locals') // replace 'locals' with your actual table name
            ->where('name', 'LIKE', '%'.$term.'%')
            ->pluck('name');

        return response()->json($results);
    }

}
