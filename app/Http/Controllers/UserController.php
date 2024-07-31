<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $list;

    public function __construct(){
        $this->list = new User();
    }

    public function index()
    {
        return view('user/dashboard');
    }

    public function settings()
    {
        $users = User::where('id', '!=', Auth::id())->get();
        return view('chat_settings.index', compact('users'));
    }




    /**
     * Update the authenticated user's profile.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $user = auth()->user();
        $user->name = $request->name;

        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $path = $file->store('avatars', 'public');
            $user->avatar = $path;
        }

        $user->save();

        return Redirect::route('settings')->with('profile-updated');
    }


}
