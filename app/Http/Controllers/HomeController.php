<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unit;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'units' => Unit::all()
        ]);


    }

    public function show(Unit $unit)
    {
        return view('detail', [
            'unit'  => $unit
        ]);
    }

}
