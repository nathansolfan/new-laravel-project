<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // type hinting video 27 - 12min
    public function viewSinglePost(Post $post)
    {

        // $ourHTML = Str::markdown($post->body);
        // $post['body'] = $ourHTML;
        // the strip_tag() is extra step, not <a> links

        $post['body'] = strip_tags(Str::markdown($post->body), '<p><ul><ol><li><strong><em><h3><br>');



        // ['post' => $post] to pass the data 
        return view('single-post', ['post' => $post]);
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
        $newPost = Post::create($incomingFields);


        // redict user to the post once created and display msg on sucess
        return redirect("/post/{$newPost->id}")->with('suceess', 'New Post successfully created');
    }

    // to display the page - view() and the name of the blade file
    public function showCreateForm()
    {
        return view('create-post');
    }
}
