@extends('layouts.app')
@section('content')
<div class="container"><br>
    
</div> <br>
  <div class="container mb-5">
        <div class="row">
            <div class="col-md-8">
                <a class="btn btn-light mb-1" href="/ads">Back</a>  <br>
                    <div class="card card-body shadow">
                        <div class="row">
                            <div id="trending" class="col-md-12" > 
                                    <div class="card card-body shadow">
                                        <h4 class="text-right">
                                            <span class="badge badge-success"> <i class="fa fa-comments"></i>0 Comments</span>
                                        </h4>
                                        <h2 class="p-3"><b><span style="color: green;">
                                            [Check This Out] </span class="p-3">{{$ad->title}}</b>
                                        </h2> <hr>
                                        <h6 class="p-2">posted by <span style="color: green">...</span>, on <span style="color: green">{{$ad->created_at}}</span>
                                        </h6>
                                       <!-- ShareThis BEGIN --><div class="sharethis-inline-share-buttons"></div><!-- ShareThis END -->
                                        <img src="/storage/advert_images/{{$ad->ad_image}}" class="img-fluid img-show p-3" alt="{{$ad->title}}">
                                        <br>
                                         <h2 class="p-3"> 
                                            <b>{{$ad->title}}</b>
                                        </h2> <br>
                                        <h5>
                                            {{$ad->body}}
                                        </h5> <br>
                                    </div>
                                 </div>
                        </div> <br>
                    </div>
            </div> <br> <br>
            <div class="col-md-4"> <br> <br>
                <div class="card">
                    <div class="">
                        <img class="img-fluid contact mx-auto d-block mt-5"  src="{{url('/img/Contact-Us.png')}}" alt="Music reel Contact"> <br>
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
                    </div>  <br>
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
                </div>
                <div class="latest-post">
                    <div class="trending_div">
                        <h2 class="text-center">Latest Ads</h2>
                   </div>
                   <div class="card card-body">
                    @if (count($latestads) > 0)
                        <div class="">
                            @foreach ($latestads as $latestad)
                                <div id="trending">
                                    @php
                                    //Manipulate the title to show in url
                                        $adtitle = str_replace(" ", '-',  $latestad->title);
                                    @endphp
                                    <a href="/ads/{{$latestad->id}}-{{$adtitle}}">
                                        <div class="card shadow">
                                        <img src="/storage/advert_images/{{$latestad->ad_image}}" class="img-fluid trending_images" alt="{{$adtitle}}">
                                        </div>
                                        <div class="card card-body">
                                            <p class="text-center"><span class="badge badge-success"> <i class="fa fa-comments"></i>0 views</span></p>
                                            <h5 class="text-center"><span style="color: green;">[Check This Out]</span> <br><b>{{$latestad->title}}</b></h5>
                                            <small>posted on {{$latestad->created_at}} </small>
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

@endsection