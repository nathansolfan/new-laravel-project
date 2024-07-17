<?php

namespace App\Http\Controllers;


use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function storeNewPost(Request $request)
    {
        //title and body of the blog
        $incomingFields = $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        //strip any malicious code
        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['body'] = strip_tags($incomingFields['body']);

        // user_id = author will match the current user/session

        $incomingFields['user_id'] = auth()->id();

        //to save into DB
        //2nd: to pass all the $incomingFields without using the array
        Post::create($incomingFields);

        // just returning hey to the page
        return 'hey';
    }





    public function showCreateForm()
    {
        return view('create-post');
        // return 'hello';
    }
}
