<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // to pass all the data from 1 array - check Post::create($incomingFields) on PostController
    protected $fillable = ['title', 'body', 'user_id'];


    // return a relationship with belongsTo method with 2 params (a,b)
    // the blog POST belongs to User --> id
    public function user()
    {
        // $this-> represents the blog class as whole
        return $this->belongsTo(User::class, 'user_id');
    }
}
