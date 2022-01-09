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
                            <div id="trending" class="col-md-12" > 
                                    <div class="card card-body shadow">
                                        <h4 class="text-right">
                                            <span class="badge badge-success"> <i class="fa fa-comments"></i>0 Comments</span>
                                        </h4>
                                        <h2 class="p-3"><b><span style="color: green;">
                                            [New Music] </span class="p-3">{{$post->title}}</b>
                                        </h2> <hr>
                                        <h6 class="p-2">posted by <span style="color: green">{{$post->user->name}}</span>, on <span style="color: green">{{$post->created_at}}</span>
                                        </h6>
                                       <!-- ShareThis BEGIN --><div class="sharethis-inline-share-buttons"></div><!-- ShareThis END -->
                                        <img src="/storage/cover_images/{{$post->cover_image}}" class="img-fluid img-show p-3" alt="{{$post->title}}">
                                        <br>
                                         <h2 class="p-3"> 
                                            <b>{{$post->heading_text}}</b>
                                        </h2> <br>
                                        <h5>
                                            {{$post->body}}
                                        </h5> <br>
                                        <div class="audiomack">
                                            <h4 style="color: green" class="text-left p-3"><a href="{{$post->audiomack_link}}"> Listen On Audiomack </a></h4><br>
                                        </div>
                                        @php
                                            
                                        @endphp
                                        <h4 class="p-3"><b>Download Below</b></h4> <br> <hr>
                                            <p class="text-center">
                                                <audio controls class="text-center">
                                                <source src="/storage/songs/{{$post->music}}" type="audio/ogg">
                                                   <source src="horse.mp3" type="audio/mpeg">
                                                    Your browser does not support the audio element.
                                               </audio>
                                            </p>
                                        <h4 class="text-center"> <a href="/storage/songs/{{$post->music}}" download="{{$post->music}}"  class="btn btn-success">Download <i class="fa fa-chevron-down"></i></a></h4>
                                        <br>
                                       <div class="youtube">
                                       <h4 style="color: green;" class="text-left p-3">
                                        <a href="{{$post->youtube_link}}">Watch Video on Youtube</a>
                                        </h4>
                                       </div> <hr>
                                        <div class="reach">
                                             <h4 style="color: green;" class="text-left p-3"><a href="{{$post->artiste_link}}">Reach Artiste</a></h4>
                                        </div>
                                        <h2 class="p-3">
                                            <b>DROP A COMMENT</b>
                                        </h2>
                                        {!!Form::open()!!}
                                        <div class="form-group">
                                            <b>{{Form::label('name', 'Name')}}</b>
                                            {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Your Name'])}}
                                        </div>
                                        <div class="form-group">
                                            <b>{{Form::label('comment', 'Comment')}}</b>
                                            {{Form::textarea('comment', '', ['class' => 'form-control', 'placeholder' => 'Comment' ])}}
                                        </div>
                                        {{Form::submit('submit',['class' => 'btn btn-success ', 'Value' => 'submit Comment', 'disabled'])}}
                                        {!!Form::close()!!}
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

@endsection