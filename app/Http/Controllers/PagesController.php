<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PagesController extends Controller
{
    //Class that controls the Page routing
    public function index(){

         //Return All the Posts
         $posts =  Post::orderBy('created_at', 'desc')->paginate(12);

         //Return Latest Posts
         $latestposts = Post::orderBy('created_at', 'desc')->take(2)->get();
 
         $allposts = [
             'posts' => $posts,
             'latestposts' => $latestposts
         ];


        return view('pages.index')->with($allposts);
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

    public function contact(){
        return view('pages.contact');
    }

}
