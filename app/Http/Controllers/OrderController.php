<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\Unit;

class OrderController extends Controller
{
    public function index()
    {
        return view('order');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            // RENT
            'name' => 'required|min:2|max:100',
            'address' => 'required|min:10|max:255',
            'phone' => 'required|regex:/^(\+62|62|0)8[1-9][0-9]{6,11}$/',
            'unit' => 'required|max:50',

            //PICKUP
            'pickup' => 'required|max:255',
            'start-time' => 'required',
            'start-date' => 'required',

            //RETURN
            'return' => 'required',
            'end-time' => 'required',
            'end-date' => 'required',
        ]);

        Transaction::create($validatedData);

        return redirect('/order')->with('success', 'Transaction successful!');
    }

    public function unitValue(Unit $unit)
    {
        return view('order', [
            'unit' => $unit
        ]);
    }

}
