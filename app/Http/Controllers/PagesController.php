<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about(){

        $name = 'Pavel';

        return view('pages.about', ['name' => $name]);
    }

    public function contact()
    {
        return view('pages.contact');
    }

}
