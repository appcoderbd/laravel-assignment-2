<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategorieRequest;
use App\Models\categorie;
use App\Models\Categorie as ModelsCategorie;
use Exception;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('content.categories');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategorieRequest $request)
    {
        //
        $validated = $request->validated();

        // dd($validated);
        try{

            Categorie::create($validated);
            return redirect()->back()->with('status', 'Category Added Successfully');


        }catch(Exception $e){

            return redirect()->back()->withErrors('status', 'Category Added Failed');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(categorie $categorie)
    {
        //
        $categories = categorie::paginate(5);
        return view('content.category-list', compact('categories'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(categorie $categorie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, categorie $categorie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(categorie $categorie)
    {
        //
    }
}
