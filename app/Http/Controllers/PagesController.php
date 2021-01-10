<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //Class that controls the Page routing
    public function index(){
        return view('pages.index');
    }

    public function music(){
        return view('pages.music');
    }

    public function sports(){
        return view('pages.sports');
    }

    public function ent(){
        return view('pages.ent');
    }

    public function ad(){
        return view('pages.ad');
    }

}
