<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
 
    
    public function edit()
    {
        $user = Auth::user();
        
        return view('pages.editProfile',[
            'username' => $user->name,
            'email'    => $user->email,
            'user_id'  => $user->id
        ]);
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $user->update($request->all());
        return redirect('profile')->with('status','Item edited successfully!');
    }
}
