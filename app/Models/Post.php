<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // to pass all the data from 1 array

    protected $fillable = ['title', 'body', 'user_id'];

    public function user()
    {
        // $this-> represents the blog class as whole
        return $this->belongsTo(User::class, 'user_id');
    }
}
