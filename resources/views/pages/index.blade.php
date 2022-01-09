@extends('layouts.app')
@section('content')
<div class="container"><br>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100  img-fluid slider_img" src="{{url('/img/slider1.jpg')}}" alt="musicreel.com.ng">
            <div class="carousel-caption d-none d-md-block">
                <h1>Music Reel</h1>
                <h2>Listen to Fresh Naija hits on Music reel
                </h2>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100  img-fluid slider_img" src="{{url('/img/slider2.jpg')}}" alt="musicreel.com.ng">
            <div class="carousel-caption d-none d-md-block">
                <h1>Music Reel</h1>
                <h2>Listen to Fresh Naija hits on Music reel
                </h2>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100 img-fluid slider_img" src="{{url('/img/slider3.jpg')}}" alt="musicreel.com.ng">
            <div class="carousel-caption d-none d-md-block">
                <h1>Music Reel</h1>
                <h2>Listen to Fresh Naija hits on Music reel
                </h2>
            </div>
        </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
        </a>
    </div>
</div> <br>
  <div class="container mb-5">
        <div class="row">
            <div class="col-md-8">
                <div class="card card-body">
                    <div class=" trending_div">
                        <h1 class="text-center trending-title">Trending Posts</h1>
                    </div> <br>
                    @if (count($posts) > 0)
                        <div class="row">
                            @foreach ($posts as $post)
                                <div id="trending" class="col-md-4">
                                    @php
                                       //Manipulate the title to show in url
                                        $posttitle = str_replace(" ", '-',  $post->title);
                                    @endphp
                                     <a href="/posts/{{$post->id}}-{{$posttitle}}">
                                        <div class="card shadow">
                                        <img src="/storage/cover_images/{{$post->cover_image}}" class="img-fluid trending_images" alt="{{$posttitle}}">
                                        </div>
                                        <div class="card card-body">
                                            <p class="text-center"><span class="badge badge-success"> <i class="fa fa-comments"></i>10 views</span></p>
                                            <h5 class="text-center"><span style="color: green;">[New Music]</span> <br><b>{{$post->title}}</b></h5>
                                            <small>posted on {{$post->created_at}} </small>
                                        </div>
                                    </a> <br>
                                </div> 
                            @endforeach
                        </div>
                        {{$posts->links()}}

                    @else
                    <p class="text-center">No Posts Found</p>

                    @endif
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="fb-page" 

                        data-href="https://web.facebook.com/musicreel2"
                        data-width="380" 
                        data-hide-cover="false"
                        data-show-facepile="false">
                    </div>
                    <div class="">
                        <img class="img-fluid contact mx-auto d-block mt-5"  src="{{url('/img/Contact-Us.png')}}" alt=""> <br>
                    </div>
                    <h4 class="pl-4">Stay with Us</h4>
                    <div class="follow-links pl-4">
                        <a href="https://web.facebook.com/musicreel2" target="_blank"><img class="img-fluid icon" src="{{url('/img/social-facebook-icon.png')}}" alt="Facebook"></a>
                        <a href="https://www.instagram.com/musicreel3/" target="_blank"><img class="img-fluid icon" src="{{url('/img/instagram.jpg')}}" alt="Insta"></a>
                        <a href="https://twitter.com/MusicReel1" target="_blank"><img class="img-fluid icon" src="{{url('/img/social-twitter-icon.png')}}" alt="Twitter"></a>
                        <a href="https://www.youtube.com/channel/UCE45L8yvkbjH-iG9je2csrw/featured?view_as=subscriber" target="_blank"><img class="img-fluid icon" src="{{url('/img/youtube.png')}}" alt="youtube"></a>
                    </div> <br>
                    <div class="trending_dark">
                         <h2 class="text-center mt-2">Search For Post</h2>
                    </div> <br>
                    <div class="input-group mb-3 p-3">
                        <input type="text" class="form-control" placeholder="Search " aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                          <button class="btn btn-dark" type="button">Search</button>
                        </div>
                    </div> <br>
                    <div class="">
                        <h5 class="text-center mt-2">Join our List <br> of Subscribers</h5>
                   </div>
                   <div class="input-group mb-3 p-3">
                       <input type="email" class="form-control" placeholder="Email Address " aria-label="Recipient's username" aria-describedby="basic-addon2">
                       <div class="input-group-append">
                         <button class="btn btn-success" type="button">Subscribe</button>
                       </div>
                   </div>
                   <div class="latest-post">
                    <div class="trending_div">
                        <h2 class="text-center">Latest Posts</h2>
                   </div>
                   <div class="card card-body">
                    @if (count($latestposts) > 0)
                        <div class="">
                            @foreach ($latestposts as $latestpost)
                                <div id="trending">
                                    @php
                                    //Manipulate the title to show in url
                                        $posttitle = str_replace(" ", '-',  $latestpost->title);
                                    @endphp
                                    <a href="/posts/{{$latestpost->id}}-{{$posttitle}}">
                                        <div class="card shadow">
                                        <img src="/storage/cover_images/{{$latestpost->cover_image}}" class="img-fluid trending_images" alt="{{$posttitle}}">
                                        </div>
                                        <div class="card card-body">
                                            <p class="text-center"><span class="badge badge-success"> <i class="fa fa-comments"></i>10 views</span></p>
                                            <h5 class="text-center"><span style="color: green;">[New Music]</span> <br><b>{{$latestpost->title}}</b></h5>
                                            <small>posted on {{$latestpost->created_at}} </small>
                                        </div>
                                    </a> <br>
                                </div> 
                            @endforeach
                        </div>
                     @endif
                   </div>
                   </div>
                </div>
            </div>
        </div>
  </div>
@endsection