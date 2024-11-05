<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SumController extends Controller
{
    // Your methods (e.g., showForm, calculateSum) go here
    public function showForm()
    {
        return view('sum-form'); // Change to your view name
    }

    public function calculateSum(Request $request)
    {
        // Logic to calculate the sum of two numbers
        $number1 = $request->input('number1');
        $number2 = $request->input('number2');
        $sum = $number1 + $number2;

        return view('sum-result', compact('sum')); // Change to your view for result
    }
}
