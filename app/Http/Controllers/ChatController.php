<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function index()
    {
        $users = User::where('id', '!=', Auth::id())->get();
        return view('chat.index', compact('users'));
    }

    //chatlist
    public function getUsers()
    {
        $users = User::select('id', 'name', 'email', 'avatar')->get();
        return response()->json($users);
    }
}
