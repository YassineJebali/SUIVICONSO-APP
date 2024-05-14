<?php
namespace App\Http\Controllers;

use App\Models\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class RegionController extends Controller
{
    public function index()
    {
        $regions = Region::all();
        return view('regions.index', compact('regions'));
    }

    public function create()
    {
        return view('regions.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => 'Validation failed', 'errors' => $validator->errors()], 400);
        }

        $region = Region::create($request->all());

        return response()->json(['message' => 'Region created successfully', 'region' => $region], 201);
    }

    public function show(Region $region)
    {
        return view('regions.show', compact('region'));
    }

    public function edit(Region $region)
    {
        return view('regions.edit', compact('region'));
    }

    public function update(Request $request, Region $region)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
        ]);
    
        $region->update($validated);
        return response()->json([
            'message' => 'Region updated successfully',
            'region' => $region
        ], 200);
    }

    public function destroy(Region $region)
    {
        $region->delete();
        return response()->json([
            'message' => 'Region deleted successfully'
        ], 200);
    }
}
?>