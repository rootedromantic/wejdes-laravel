<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function profile(){
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('admin.profile')->with(['active' => 'user', 'user' => $user]);
    }

    public function store(){

    }
    public function update(){
        return 'testing';
    }
}
