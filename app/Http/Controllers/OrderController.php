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

        $validatedData = $request->validate([
            // RENT
            'unit_id' => 'required',
            'code' => 'required|unique:transactions,code',
            'status' => 'required',
            'unit_name' => 'required',

            'name' => 'required|max:100',
            'address' => 'required|max:255',
            'phone_number' => 'required',

            //PICKUP
            'pickup_address' => 'required|max:255',
            'start_time' => 'required',
            'start_date' => 'required',

            //RETURN
            'return_address' => 'required',
            'end_time' => 'required',
            'end_date' => 'required',

            //TOTAL & DURATION
            'total' => 'required',
            'duration' => 'required'
            
        ]);
    

        Transaction::create($validatedData);

        return redirect()->route('print-order')->with('transaction_data', $validatedData)->with('success', 'Transaction successful!');
    
    }

    public function printOrder(Request $request)
    {
        // Ambil data transaksi dari sesi
    $transactionData = $request->session()->get('transaction_data');

    // Tampilkan halaman print_order dengan data transaksi
    return view('print_order', [
        'transactionData' => $transactionData,
        'success' => $request->session()->get('success')
    ]);
    }


}
