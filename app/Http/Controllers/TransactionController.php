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

    public function update(Request $request, Transaction $transaction)
    {
        return view('admin.edit_transaction', [
            'transaction' => $transaction,
            'categories' => Category::all(),
            'units' => Unit::all()
        ]);
    }

    public function destroy(Unit $transaction)
    {
        Transaction::destroy($transaction->id);

        return redirect('/transaction')->with('success', 'Transaction has been deleted');
    }
}
