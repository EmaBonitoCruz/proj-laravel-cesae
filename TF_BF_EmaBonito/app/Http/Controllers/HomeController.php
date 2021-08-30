<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('pages.index');
    }

    public function profile()
    {

        $id = Auth::id();
        $user = Auth::user();
        
        $recipes = DB::table('recipes')->where('user_id', $id)->get();

        
        return view('pages.profile',[
            'user_id'  => $id,
            'username' => $user->name,
            'email'    => $user->email,
            'recipes'  => $recipes
        ]);

    }
}
