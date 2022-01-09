<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ad;

class AdsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //fethc All our Adverts
         $ads = Ad::orderBy('created_at', 'desc')->paginate(12);

         
         //Return Latest Ads
         $latestads = Ad::orderBy('created_at', 'desc')->take(2)->get();

         //Return All Ads
        $alladds = [
            'ads' => $ads,
            'latestads' => $latestads
        ];

        //Load our view
        return view('ads.index')->with($alladds);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view to create Posts
        return view('ads.create');
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
        if ($request->hasFile('ad_image')) {
            //Get Image Name with Extension
            $fileNameWithExt = $request->file('ad_image')->getClientOriginalName();

            //Get Just The Filename
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            //Get Just The Extension
            $ext = $request->file('ad_image')->getClientOriginalExtension();

            //create filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$ext;

            //Upload Image
            $path = $request->file('ad_image')->storeAs('public/advert_images', $fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }
         //Validate the form
         $this->validate($request, [
            'title' => 'required',
            'ad_image' => 'required|image|max:2999',
            'body' => 'required',
        ]);


        $ad = new Ad;
        $ad->title = $request->input('title');
        $ad->ad_image = $fileNameToStore;
        $ad->body = $request->input('body');


         //Save Post
         $ad->save();

         //redirect
         return redirect('/ads')->with('success', 'Advert Succesfully Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //return each individual Ad
        $ad = Ad::find($id);

         //Return Latest Ads
         $latestads = Ad::orderBy('created_at', 'desc')->take(2)->get();

        $showallads = [
            'ad' => $ad,
            'latestads' => $latestads
        ];

       

        return view('ads.show')->with($showallads);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
