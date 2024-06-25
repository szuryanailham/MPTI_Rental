<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Unit;
use App\Models\Category;

class TransactionController extends Controller
{
    public function index()
    {
        return view('admin.transaction', [
            'transactions' => Transaction::latest()->get()
        ]);
    }

    public function edit(Transaction $transaction)
    {
        return view('admin.edit_transaction', [
            'transaction' => $transaction,
            'categories' => Category::all(),
            'units' => Unit::all()
        ]);
    }

    public function update(Request $request, Transaction $transaction)
    {
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

        Transaction::where('id', $transaction->id)->update($validatedData);
        return redirect('/transaction')->with('success', 'Transaction has been updated!');

    }


    public function destroy(Transaction $transaction)
    {
        Transaction::destroy($transaction->id);

        return redirect('/transaction')->with('success', 'Transaction has been deleted');
    }
}
