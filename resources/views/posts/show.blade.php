@extends('layouts.app')
@section('content')
<div class="container"><br>
    
</div> <br>
  <div class="container mb-5">
        <div class="row">
            <div class="col-md-8">
                <a class="btn btn-light mb-1" href="/posts">Back</a>  <br>
                    <div class="card card-body shadow">
                        <div class="row">
                            <div id="trending" class="col-md-12"> 
                                    <div class="card card-body shadow">
                                        <h4 class="text-right">
                                            <span class="badge badge-success"> <i class="fa fa-comments"></i>10 Comments</span>
                                        </h4>
                                        <h2 class="p-2"><b><span style="color: green;">
                                            [New Music] </span>{{$post->title}}</b>
                                        </h2>
                                        <small class="p-2">posted by <span style="color: green">Emeka Iloba</span>, on <span style="color: green">{{$post->created_at}}</span></small>
                                        <img src="{{url('/img/art_sample.jpg')}}" class="img-fluid" alt="">
                                        <h2> 
                                            <b>{{$post->heading_text}}</b>
                                        </h2> <br>
                                        <h5>
                                            {{$post->body}}
                                        </h5> <br>
                                        <div class="audiomack">
                                            <h4 style="color: green" class="text-left"><a href="{{$post->audiomack_link}}"> Listen On Audiomack </a></h4><br>
                                        </div>
                                        <h4><b>Download Below</b></h4> <br>
                                            <h4 class="text-center">  <button class="btn btn-success btn-lg">Download <i class="fa fa-chevron-down"></i></button></h4>
                                        <br>
                                       <div class="youtube">
                                       <h4 style="color: green;" class="text-left">
                                        <a href="{{$post->youtube_link}}">Watch Video on Youtube</a>
                                        </h4>
                                       </div>
                                        <div class="reach">
                                             <h4 style="color: green;" class="text-left"><a href="{{$post->artiste_link}}">Reach Artiste</a></h4>
                                        </div>
                                        <h2>
                                            <b>DROP A COMMENT</b>
                                        </h2>
                                        <form action="">
                                            <input type="text" name="name" class="form-control" placeholder="Name"><br>
                                            <textarea name="comment" cols="50" rows="10" class="form-control"></textarea> <br>
                                            <input type="submit" class="btn btn-success">
                                        </form>
                                    </div>
                            </div>
                        </div> <br>
                    </div>
            </div> <br> <br>
            <div class="col-md-4"> <br> <br>
                <div class="card">
                    <div class="">
                        <img class="img-fluid contact mx-auto d-block mt-5"  src="{{url('/img/Contact-Us.png')}}" alt=""> <br>
                    </div>
                    <h4 class="pl-4">Stay with Us</h4>
                    <div class="follow-links pl-4">
                        <a href="#"><img class="img-fluid icon" src="{{url('/img/social-facebook-icon.png')}}" alt="Facebook"></a>
                        <a href="#"><img class="img-fluid icon" src="{{url('/img/instagram.jpg')}}" alt="Insta"></a>
                        <a href="#"><img class="img-fluid icon" src="{{url('/img/social-twitter-icon.png')}}" alt="Twitter"></a>
                        <a href="#"><img class="img-fluid icon" src="{{url('/img/youtube.png')}}" alt="youtube"></a>
                    </div> <br>
                    <div class="trending_dark pl-2">
                         <h2 class="text-center mt-2">Search For Post</h2>
                    </div>
                    <div class="input-group mb-3 px-1">
                        <input type="text" class="form-control" placeholder="Search " aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                          <button class="btn btn-dark" type="button">Search</button>
                        </div>
                    </div> <br>
                    <div class="">
                        <h2 class="text-center mt-2">Join our List <br> of Subscribers</h2>
                   </div>
                   <div class="input-group mb-3">
                       <input type="email" class="form-control" placeholder="Email Address " aria-label="Recipient's username" aria-describedby="basic-addon2">
                       <div class="input-group-append">
                         <button class="btn btn-info" type="button">Subscribe</button>
                       </div>
                   </div>
                </div>
            </div>
        </div>
  </div>

@endsection