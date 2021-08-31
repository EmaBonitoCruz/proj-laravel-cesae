<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class UserController extends Controller
{
 
    
    public function edit(User $user)
    {
        $user = Auth::user();
        
        return view('pages.editProfile',[
            'username' => $user->name,
            'email'    => $user->email,
            'user_id'  => $user->id
        ]);
    }
}
