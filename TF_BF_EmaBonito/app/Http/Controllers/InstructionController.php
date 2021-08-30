<?php

namespace App\Http\Controllers;

use App\Instruction;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class InstructionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $recipe = DB::table('recipes')->latest('created_at')->first();

        $instructions = DB::table('instructions')->where('recipe_id', $recipe->id)->get();

        return view('pages.createInstructions',[
            'recipe_id'   => $recipe -> id,
            'instructions' => $instructions

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        
        Instruction::create($input);

        $recipe = DB::table('recipes')->latest('created_at')->first();   
        $instructions = DB::table('instructions')->where('recipe_id', $recipe->id)->get();
     

        return view('pages.createInstructions',[
            'recipe_id'   => $recipe -> id,
            'instructions' => $instructions
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Instruction  $instruction
     * @return \Illuminate\Http\Response
     */
    public function show(Instruction $instruction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Instruction  $instruction
     * @return \Illuminate\Http\Response
     */
    public function edit(Instruction $instruction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Instruction  $instruction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Instruction $instruction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Instruction  $instruction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Instruction $instruction)
    {
        //
    }
}
