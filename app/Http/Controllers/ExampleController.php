<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ExampleController extends Controller
{
    public function homepage()
    {
        // data loaded from DB
        $ourName = 'Nathan';
        $catName = 'Miao';

        // use allAnimals into blade
        $animals = ["Dog", "Cat", "Fish"];


        // use view() to call the blade 
        return view('homepage', ['name' => $ourName, 'catname' => $catName, 'allAnimals' => $animals]);
    }

    public function aboutPage()
    {
        return view('single-post');
    }
}
