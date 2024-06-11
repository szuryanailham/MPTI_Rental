<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Unit;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function index()
    {
        $units = Unit::latest();

        if(request('search')){
            $units->where('name', 'like', '%' . request('search') . '%');
        }

        return view('admin.dashboard_admin', [
            'units' => $units->get(),
            'openTransactions' => Transaction::where('status', ['open', 'Open'])->count(),
            'totalTransactions' => Transaction::where('status', 'open')->sum('total'),
            'peopleTransactions' => Transaction::all()->count()
        ]);
    }
}