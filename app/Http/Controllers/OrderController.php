<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Unit;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function order(Unit $unit)
    {
        return view('order', [
            'unit'  => $unit
        ]);
    }

    public function store(Request $request, Unit $unit)
    {

        $request->validate([
            'duration-text' => 'required'
        ]);

        $validatedData = $request->validate([
            // RENT
            'unit_id' => 'required',
            'status' => 'required',

            'name' => 'required|max:100',
            'address' => 'required|max:255',
            'phone_number' => 'required',
            // 'unit_name' => 'required|max:100',
            // 'price' => 'required|numeric',

            //PICKUP
            'pickup_address' => 'required|max:255',
            // 'start-time' => 'required',
            'start_date' => 'required',

            //RETURN
            'return_address' => 'required',
            // 'end-time' => 'required',
            'end_date' => 'required',

            //TOTAL & DURATION
            'total' => 'required',
            'duration' => 'required'
            
        ]);

        Transaction::create($validatedData);

        return redirect('/order/' . $unit->slug)->with('success', 'Transaction successful!');
    }


}
