<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Counter;

class CounterController extends Controller
{
    public function index()
    {
        $counters = Counter::all();
        return view('counters.index', compact('counters'));
    }

    public function create()
    {
        return view('counters.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'type' => 'required|max:255',
            'serial_number' => 'required|unique:counters',
            'local_id' => 'required|exists:locals,id',
            'avg_consommation' => 'required|numeric',
        ]);

        $counter = Counter::create($validatedData);

        return response()->json(['message' => 'Counter created successfully', 'counter' => $counter], 201);
    }

    public function show(Counter $counter)
    {
        return view('counters.show', compact('counter'));
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
}
