<?php

namespace App\Http\Controllers;


use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class PostController extends Controller
{

    // Post $pizza means that the incoming value from the route web.php 
    public function viewSinglePost(Post $post)
    {
        return view('single-post', ['post' => $post]);
    }




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
        $newPost = Post::create($incomingFields);

        return redirect("/post/{$newPost->id}")->with('success', 'New Post successfully created');

        // just returning hey to the page
        return 'hey';
    }





    public function showCreateForm()
    {
        // if (!auth()->check()) {
        //     return redirect('/');
        // }
        Log::info('showCreateForm method accessed'); // Add this line

        return view('create-post');
        // return 'hello';
    }
}
