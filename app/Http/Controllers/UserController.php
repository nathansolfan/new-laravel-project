<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // Request and $request
    public function register(Request $request)
    {
        // validate() method
        $incomingFields = $request->validate([
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        return 'Hello from register function';
    }
}
