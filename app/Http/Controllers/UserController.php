<?php

namespace App\Http\Controllers;

// Model - CRUD and relationships, aka blogs from user
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    // Request and $request
    public function register(Request $request)
    {
        // validate() method
        $incomingFields = $request->validate([
            'username' => ['required', 'min:3', 'max:20', Rule::unique('users', 'username')],
            'email' => 'required',
            'password' => 'required',
        ]);
        User::create($incomingFields);
        return 'Hello from register function';
    }
}
