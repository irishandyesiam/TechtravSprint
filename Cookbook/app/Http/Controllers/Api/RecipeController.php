<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\RecipeResource;
use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Support\Facades\Http;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $recipes = RecipeResource::collection(Recipe::all());
        return view('recipes.index', compact('recipes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('recipes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $recipe = Recipe::create([
            'recipeName' => $request->recipeName,
            'image' => $request->image,
            'ingredients' => $request->ingredients,
            'instructions' => $request->instructions,
        ]);

        return redirect('/add_recipe')->with('message', 'Recipe Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Recipe $recipe)
    {
        return new RecipeResource($recipe);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($recipe_id)
    {
        $recipe = Recipe::find($recipe_id);
        return view('recipes.edit', compact('recipe'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $recipe_id)
    {
        $recipe = Recipe::where('id', $recipe_id)->update([
            'recipeName' => $request->recipeName,
            'image' => $request->image,
            'ingredients' => $request->ingredients,
            'instructions' => $request->instructions,
        ]);

        return redirect('/recipes')->with('message', 'Recipe Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($recipe_id)
    {
        $recipe = Recipe::find($recipe_id)->delete();
        return redirect('/recipes')->with('message', 'Recipe Deleted Successfully');
    }
}
