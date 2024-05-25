<?php

namespace App\Http\Controllers;

use App\Models\Local_Family;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LocalFamilyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Local_Family::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'description' => 'required',
            'parent_id' => 'nullable|exists:local_families,ID',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $localFamily = Local_Family::create($request->all());

        return response()->json($localFamily, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Local_Family  $localFamily
     * @return \Illuminate\Http\Response
     */
    public function show(Local_Family $localFamily)
    {
        return $localFamily;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Local_Family  $localFamily
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Local_Family $localFamily)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'description' => 'required',
            'parent_id' => 'nullable|exists:local_families,ID',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $localFamily->update($request->all());

        return response()->json($localFamily);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Local_Family  $localFamily
     * @return \Illuminate\Http\Response
     */
    public function destroy(Local_Family $localFamily)
    {
        $localFamily->delete();

        return response()->json(null, 204);
    }
}