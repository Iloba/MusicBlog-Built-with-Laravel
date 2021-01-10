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
            <img class="d-block w-100" src="{{url('/img/7.jpg')}}" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
                <h1>Lorem ipsum dolor sit.</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                    Quidem voluptate quo excepturi modi praesentium officiis ut.
                </p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{url('/img/1.jpg')}}" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                <h1>Lorem ipsum dolor sit.</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                    Quidem voluptate quo excepturi modi praesentium officiis ut.
                </p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{url('/img/4.jpg')}}" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
                <h1>Lorem ipsum dolor sit.</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                    Quidem voluptate quo excepturi modi praesentium officiis ut.
                </p>
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
                    <div class="card card-body shadow">
                        <div class=" trending_div">
                            <h1 class="text-center trending-title">Trending Posts</h1>
                        </div>
                        <div class="row">
                            <div id="trending" class="col-md-4">
                                <a href="#">
                                    <div class="card shadow">
                                        <img src="{{url('/img/7.jpg')}}" class="img-fluid trending_images" alt="">
                                    </div>
                                    <div class="card card-body">
                                        <p class="text-center"><span class="badge badge-success">10 views</span></p>
                                        <h5 class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing.</h5>
                                    </div>
                                </a>
                            </div>
                            <div id="trending" class="col-md-4">
                                <a href="#">
                                    <div class="card shadow">
                                        <img src="{{url('/img/7.jpg')}}" class="img-fluid trending_images" alt="">
                                    </div>
                                    <div class="card card-body">
                                        <p class="text-center"><span class="badge badge-success">10 views</span></p>
                                        <h5 class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing.</h5>
                                    </div>
                                </a>
                            </div>
                            <div id="trending" class="col-md-4">
                                <a href="#">
                                    <div class="card shadow">
                                        <img src="{{url('/img/7.jpg')}}" class="img-fluid trending_images" alt="">
                                    </div>
                                    <div class="card card-body">
                                        <p class="text-center"><span class="badge badge-success">10 views</span></p>
                                        <h5 class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing.</h5>
                                    </div>
                                </a>
                            </div>
                            
                        </div> <br>
                        <div class="row">
                            <div id="trending" class="col-md-4">
                                <a href="#">
                                    <div class="card shadow">
                                        <img src="{{url('/img/7.jpg')}}" class="img-fluid trending_images" alt="">
                                    </div>
                                    <div class="card card-body">
                                        <p class="text-center"><span class="badge badge-success">10 views</span></p>
                                        <h5 class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing.</h5>
                                    </div>
                                </a>
                            </div>
                            <div id="trending" class="col-md-4">
                                <a href="#">
                                    <div class="card shadow">
                                        <img src="{{url('/img/7.jpg')}}" class="img-fluid trending_images" alt="">
                                    </div>
                                    <div class="card card-body">
                                        <p class="text-center"><span class="badge badge-success">10 views</span></p>
                                        <h5 class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing.</h5>
                                    </div>
                                </a>
                            </div>
                            <div id="trending" class="col-md-4">
                                <a href="#">
                                    <div class="card shadow">
                                        <img src="{{url('/img/7.jpg')}}" class="img-fluid trending_images" alt="">
                                    </div>
                                    <div class="card card-body">
                                        <p class="text-center"><span class="badge badge-success">10 views</span></p>
                                        <h5 class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing.</h5>
                                    </div>
                                </a>
                            </div>
                            
                        </div>
                    </div>
            </div> <br> <br>
            <div class="col-md-4">
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
                    <div class="trending_dark">
                         <h2 class="text-center mt-2">Search For Post</h2>
                    </div>
                    <div class="input-group mb-3">
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