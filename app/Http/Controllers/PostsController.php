<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Bring in the Post Model
use App\Post;

//Bring in the Comment Model
use App\Comment;

class PostsController extends Controller
{
    //auth Control
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]); 
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //Return All the Posts
        $posts =  Post::orderBy('created_at', 'desc')->paginate(12);

        //Return Latest Posts
        $latestposts = Post::orderBy('created_at', 'desc')->take(3)->get();

        

        $allposts = [
            'posts' => $posts,
            'latestposts' => $latestposts,
            
        ];
       

        //return the view for your posts
        return view('posts.index')->with($allposts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Return  View to Create Posts
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Submit Data to Database

        //Handle  Image File Upload
        if ($request->hasFile('cover_image')) {
            //Get Image Name with Extension
            $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();

            //Get Just The Filename
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            //Get Just The Extension
            $ext = $request->file('cover_image')->getClientOriginalExtension();

            //create filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$ext;

            //Upload Image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }

        //Handle  Music File Upload
        if ($request->hasFile('music')) {
            //Set Memore
            ini_set('memory_limit','256M');

            //Get music Name with Extension
            $musicNameWithExt = $request->file('music')->getClientOriginalName();

            //Get Just The Filename
            $musicname = pathinfo($musicNameWithExt, PATHINFO_FILENAME);

            //Get Just The Extension
            $extension = $request->file('music')->getClientOriginalExtension();

            //create filename to store
            $musicNameToStore = $musicname.'.'.$extension;

            //Upload Image
            $paths = $request->file('music')->storeAs('public/songs', $musicNameToStore);
        }else{
            $musicNameToStore = 'nomusic.mp3';
        }

        //Validate the form
        $this->validate($request, [
            'title' => 'required',
            'cover_image' => 'required|image|max:5999',
            'heading_text' => 'required',
            'body' => 'required',
            'audiomack_link' => 'required',
            'music' => 'required|mimes:mp3|max:200000',
            'youtube_link' => 'required',
            'artiste_link' => 'required'
        ]);
       
        //Create Post
        $post = new Post;
        $post->user_id = auth()->user()->id;
        $post->title = $request->input('title');
        $post->cover_image = $fileNameToStore;
        $post->heading_text = $request->input('heading_text');
        $post->body = $request->input('body');
        $post->audiomack_link = $request->input('audiomack_link');
        $post->music = $musicNameToStore;
        $post->youtube_link = $request->input('youtube_link');
        $post->artiste_link = $request->input('artiste_link');
      
        //Save Post
        $post->save();

        //redirect
        return redirect('/posts')->with('success', 'Post Succesfully Created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        
        
        //Show Posts Individually
        $post = Post::find($id);

         //Return Latest Posts
         $latestposts = Post::orderBy('created_at', 'desc')->take(2)->get();

         $showallposts = [
             'post' => $post,
             'latestposts' => $latestposts
         ];

        //load the view
        return view('posts.show')->with($showallposts);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //edit a post
        //Show Posts Individually
        $post = Post::find($id);

        //load the view
        return view('posts.edit')->with( 'post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Update post

        //Submit Data to Database

        //Handle  Image File Upload
        if ($request->hasFile('cover_image')) {
            //Get Image Name with Extension
            $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();

            //Get Just The Filename
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            //Get Just The Extension
            $ext = $request->file('cover_image')->getClientOriginalExtension();

            //create filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$ext;

            //Upload Image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }

        //Handle  Music File Upload
        if ($request->hasFile('music')) {
            //Set Memore
            ini_set('memory_limit','256M');

            //Get music Name with Extension
            $musicNameWithExt = $request->file('music')->getClientOriginalName();

            //Get Just The Filename
            $musicname = pathinfo($musicNameWithExt, PATHINFO_FILENAME);

            //Get Just The Extension
            $extension = $request->file('music')->getClientOriginalExtension();

            //create filename to store
            $musicNameToStore = $musicname.'.'.$extension;

            //Upload Image
            $paths = $request->file('music')->storeAs('public/songs', $musicNameToStore);
        }else{
            $musicNameToStore = 'nomusic.mp3';
        }

        //Validate the form
        $this->validate($request, [
            'title' => 'required',
            'cover_image' => 'required|image|max:4999',
            'heading_text' => 'required',
            'body' => 'required',
            'audiomack_link' => 'required',
            'music' => 'required|mimes:mp3|max:20000',
            'youtube_link' => 'required',
            'artiste_link' => 'required'
        ]);
       
        //Create Post
        $post = Post::find($id);
        $post->user_id = auth()->user()->id;
        $post->title = $request->input('title');
        $post->cover_image = $fileNameToStore;
        $post->heading_text = $request->input('heading_text');
        $post->body = $request->input('body');
        $post->audiomack_link = $request->input('audiomack_link');
        $post->music = $musicNameToStore;
        $post->youtube_link = $request->input('youtube_link');
        $post->artiste_link = $request->input('artiste_link');
      
        //Save Post
        $post->save();

        //redirect
        return redirect('/posts')->with('success', 'Post Updated Created');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //delete Post
        $post = Post::find($id);
        $post->delete();

        //redirect
        return redirect('/posts')->with('success', 'Post Removed');
    }

    
}
