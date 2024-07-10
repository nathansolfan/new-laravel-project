<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function storeNewPost(Request $request)
    {
        $incomingFields = $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        // strip_tags for malicious code
        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['body'] = strip_tags($incomingFields['body']);
        // after = is the dinamic way
        $incomingFields['user_id'] = auth()->id();


        return 'hey!!';
    }


    // to display the page - view() and the name of the blade file
    public function showCreateForm()
    {
        return view('create-post');
    }
}
