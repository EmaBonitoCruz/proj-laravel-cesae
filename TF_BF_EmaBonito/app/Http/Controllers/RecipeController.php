<?php

namespace App\Http\Controllers;

use App\Recipe;
use App\Ingredient;
use Illuminate\Support\Facades\DB;
use App\Instruction;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ing = new Ingredient();

        $recipes = Recipe::with('ingredients')
        ->where('user_id','6')
        ->orderBy('id','desc')
        ->get();

        $ingredients = DB::table($ing -> getTable())->where('recipe_id', '6')->get();

        return view('pages.index',[
            'recipes' => $recipes,
            'ingredients' => $ingredients
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function show(Recipe $recipe)
    {
        // $ingredients = Ingredient::with('recipe')->get();
        // $instructions = Instruction::with('recipe')->get();
        
        return view('pages.show', [
            'recipe' => $recipe,
            // 'ingredients' => $ingredients,
            // 'instructions' =>$instructions
        ]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Recipe $recipe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recipe $recipe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recipe $recipe)
    {
        //
    }
}
