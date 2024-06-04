<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Models\Category;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $units = Unit::all();

        if(request('search')){
            $search = request('search');

            $units->where('name', 'like', '%' . request('search') . '%')
                    ->orWhereHas('category', function($query) use ($search) {
                        $query->where('name', 'like', '%' . $search . '%');
                    })
                    ->orWhere('id', 'like', '%' . request('search') . '%');
        }

        return view('admin.all_unit', [
            'units' => $units
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.add_unit', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            //Add Unit
            'name' => 'required|string|max:255',
            'slug' => 'required|unique:units',       
            'category_id' => 'required',   
            'price' => 'required|numeric|min:0',       
            'capacity' => 'required|integer|min:1',    
            'description' => 'required',        
        ]);


        Unit::create($validatedData);

        return redirect('/dashboard-units')->with('success', 'Unit added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Unit $unit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Unit $unit)
    {
        return view('admin.edit_unit', [
            'unit' => $unit,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Unit $unit)
    {
        $validatedData = [
            //Edit Unit
            'name' => 'required|string|max:255',     
            'category_id' => 'required',   
            'price' => 'required|numeric|min:0',       
            'capacity' => 'required|integer|min:1',    
            'description' => 'required|string',        
        ];


        if($request->slug != $unit->slug){
            $validatedData['slug'] = 'required|unique:units';
        }

        $newData = $request->validate($validatedData);
        // dd($newData);

        Unit::where('id', $unit->id)->update($newData);

        return redirect('/dashboard-units')->with('success', 'Unit has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Unit $unit)
    {
        Unit::destroy($unit->id);

        return redirect('/dashboard-units')->with('success', 'Unit has been deleted');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Unit::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);

    }
}
