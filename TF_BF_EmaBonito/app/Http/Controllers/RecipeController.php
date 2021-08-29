<?php

namespace App\Http\Controllers;

use App\Recipe;
use App\Ingredient;
use Illuminate\Support\Facades\DB;
use App\Instruction;
use Illuminate\Support\Facades\Auth;


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

        $id = Auth::id();
        
        $recipes = Recipe::with('ingredients')
        ->where('user_id',$id)
        ->orderBy('id','desc')
        ->get();


        return view('pages.index',[
            'recipes' => $recipes,
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id = Auth::id();

        return view('pages.create',['user_id' => $id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'title' => 'required',
        //     'description' => 'required',
        //     'user_id' => 'required'
        //     ]);

        //     Recipe::create($request->all());

        $input = $request->all();
        
        Recipe::create($input);

        $id = Auth::id();

        $recipe = DB::table('recipes')->latest('created_at')->first();
          
        // $ing = new Ingredient();
        $ingredients = DB::table('ingredients')->where('recipe_id', $recipe->id)->get();
     

        return view('pages.createIngredients',[
            'user_id'     => $id,
            'recipe_id'   => $recipe -> id,
            'ingredients' => $ingredients

        ]);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function show(Recipe $recipe)
    {
  
        
        $ing = new Ingredient();
        $ingredients = DB::table($ing -> getTable())->where('recipe_id', $recipe->id)->get();
        
        $inst = new Instruction();
        $instructions = DB::table($inst -> getTable())->where('recipe_id', $recipe->id)->get();

        
        return view('pages.show', [
            'recipe' => $recipe,
            'ingredients' => $ingredients,
            'instructions' =>$instructions
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
