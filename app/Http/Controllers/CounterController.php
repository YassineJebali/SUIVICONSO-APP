<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Counter; // Import the Counter class from the appropriate namespace

class CounterController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'billing_method' => [
                'required',
                Rule::in(Counter::$billingmethods),
            ],
            // Add other fields to validate here...
        ]);
    
        Counter::create($request->all());
        // Redirect the user to the counters index page with a success message
        return redirect()->route('counters.index')
                        ->with('success', 'Counter created successfully.');
    }
}

