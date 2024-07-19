<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.dashboard');
    }

    public function userSelector()
    {
        $users = User::all();
        return('/chat')->with('user',$users);
    }
}
