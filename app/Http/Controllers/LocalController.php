<?php

namespace App\Http\Controllers;

use App\Models\Local;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Region;

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
        if ($local) {
            return view('locals.show', ['local' => $local]);
        } else {
            return response()->json(['error' => 'Local not found'], 404);
        }
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
