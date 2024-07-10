<?php

namespace App\Http\Controllers;

// Model - CRUD and relationships, aka blogs from user
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{

    public function showCorrectHomepage()
    {
        // use auth method and check on it
        if (auth()->check()) {
            return view('homepage-feed');
        } else {
            return view('homepage');
        }
    }

    public function login(Request $request)
    {
        $incomingFields = $request->validate([
            'loginusername' => 'required',
            'loginpassword' => 'required'
        ]);

        if (auth()->attempt(['username' => $incomingFields['loginusername'], 'password' => $incomingFields['loginpassword']])) {
            // -> to look inside
            $request->session()->regenerate();
            return 'Congratz';
        } else {
            return "Sorry";
        }
    }

    // Request and $request
    public function register(Request $request)
    {
        // validate() method
        $incomingFields = $request->validate([
            'username' => ['required', 'min:3', 'max:20', Rule::unique('users', 'username')],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'min:8', 'confirmed'],
        ]);

        $incomingFields['password'] = bcrypt($incomingFields['password']);



        User::create($incomingFields);
        return 'Hello from register function';
    }
}