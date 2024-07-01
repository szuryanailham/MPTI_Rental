<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unit;

class HomeController extends Controller
{
    public function index()
    {
        $query = Unit::query();
    
        if (request('search')) {
            $search = '%' . request('search') . '%';
    
            $query->where(function ($query) use ($search) {
                $query->where('name', 'like', $search)
                      ->orWhereHas('category', function($query) use ($search) {
                          $query->where('name', 'like', $search);
                      })
                      ->orWhere('id', 'like', $search);
            });
        }
    
        $units = $query->paginate(9);

        return view('home', [
            'units' => $units
        ]);


    }

    public function show(Unit $unit)
    {
        return view('detail', [
            'unit'  => $unit
        ]);
    }

    // public function order(Unit $unit)
    // {
    //     return view('order', [
    //         'unit'  => $unit
    //     ]);
    // }
    
}
