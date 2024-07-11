<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function viewSinglePost()
    {
        return view('single-post');
    }



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

        // to create SQL stmt to save into DB
        Post::create($incomingFields);


        return 'hey!!';
    }

    // to display the page - view() and the name of the blade file
    public function showCreateForm()
    {
        return view('create-post');
    }
}
