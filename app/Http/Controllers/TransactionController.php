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
    $query = Transaction::query();

    if (request('search')) {
        $search = '%' . request('search') . '%';

        $query->where(function ($query) use ($search) {
            $query->where('code', 'like', $search)
                  ->orWhere('status', 'like', $search)
                  ->orWhere('name', 'like', $search)
                  ->orWhere('address', 'like', $search)
                  ->orWhere('phone_number', 'like', $search)
                  ->orWhere('pickup_address', 'like', $search)
                  ->orWhere('start_date', 'like', $search)
                  ->orWhere('end_date', 'like', $search)
                  ->orWhere('total', 'like', $search);
        });
    }

    $transactions = $query->paginate(10);

    return view('admin.transaction', [
        'transactions' => $transactions
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
        // dd(request());
        $validatedData = $request->validate([
            // RENT
            'unit_id' => 'required',
            //'code' => 'required|unique:transactions,code',
            'status' => 'required',
            // 'unit_name' => 'required',

            'name' => 'required|max:100',
            'address' => 'required|max:255',
            'phone_number' => 'required',

            //PICKUP
            'pickup_address' => 'required|max:255',
            // 'start_time' => 'required',
            'start_date' => 'required',

            //RETURN
            // 'return_address' => 'required',
            // 'end_time' => 'required',
            'end_date' => 'required',

            //TOTAL & DURATION
            'total' => 'required',
            // 'duration' => 'required'
            
        ]);

        Transaction::where('id', $transaction->id)->update($validatedData);
        return redirect('/transactions')->with('success', 'Transaction has been updated!');

    }


    public function destroy(Transaction $transaction)
    {
        Transaction::destroy($transaction->id);

        return redirect('/transactions')->with('success', 'Transaction has been deleted');
    }
}
