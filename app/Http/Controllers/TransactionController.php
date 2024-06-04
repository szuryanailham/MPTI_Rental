<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Unit;

class TransactionController extends Controller
{
    public function index()
    {
        return view('admin.transaction', [
            'transactions' => Transaction::latest()->get()
        ]);
    }
}
