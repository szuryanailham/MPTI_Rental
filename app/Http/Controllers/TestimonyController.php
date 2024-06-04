<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimony;

class TestimonyController extends Controller
{
    public function index()
    {
        return view('testimony', [
            'testimonies' => Testimony::orderBy('rating', 'desc')->paginate(6)
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            //Testimony
            'rating' => 'required|numeric|min:1|max:5',
            'name' => 'required|string|max:50',
            'comment' => 'required|string|max:255'
        ]);

        $testimonyData = [
            'rating' => $validatedData['rating'],
            'name' => $validatedData['name'],
            'description' => $validatedData['comment'] // Map 'comment' ke 'description'
        ];

        Testimony::create($testimonyData);

        return redirect()->back()->with('success', 'Testimony added successfully');
    }
}
