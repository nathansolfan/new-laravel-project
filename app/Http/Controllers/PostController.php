<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function storeNewPost()
    {
        return 'hey!!';
    }


    // to display the page - view() and the name of the blade file
    public function showCreateForm()
    {
        return view('create-post');
    }
}
