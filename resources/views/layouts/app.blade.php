<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{url('/img/favicon.png')}}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Home of  Music & Entertainment, Lively Music to Lighten Up your Mood and Make your Day | Promote your Music on Musicreel.com.ng">

    <title>MusicReel | Home of Music & Entertainment</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

     <!-- Fonts Awesome-->
     <script src="https://use.fontawesome.com/d90c6c6201.js"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- ShareThis -->
    <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5cd57de93255ff0012e3812e&product=sticky-share-buttons' async='async'></script>
    
</head>
<body>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v8.0"
    nonce="35G8J3j6"></script>
    <div id="app" style="">
        <nav id="my_nav" class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand m" href="{{ url('/') }}">
                 <img class="logo" src="{{url('/img/logo.png')}}" alt="Musicreel.com"/>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item ">
                            <a class="nav-link" href="/posts"> <i class="fa fa-music"></i> Music Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/sports"><i class="fa fa-gamepad"></i> Sports</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/ent"> <i class="fa fa-tv"></i> Entertainment</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/ad"> <i class="fa fa-registered"></i> Adverts Placement</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact"> <i class="fa fa-phone"></i> Contact Us</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item" >
                                    <a class="nav-link disabled" href="{{ route('register') }}">{{ __(' ') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a style="color: #000;" class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <a class="dropdown-item" style="color: #000" href="/home">Dashboard</a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <main class="container"> <br>
            @include('layouts.messages')
            @yield('content')
           
         </main>
        <footer class="mt-5">
            <div class="container">
                  <div class="row">
                      <div class="col-md-10 offset-2">
                          <div class="row">
                              <div id="footer-box" class="col-md-4">
                                  <h3 class="footer-header">Hot Categories</h3>
                                  <p class="footer-links">
                                      <h5><a href="#">MR Podcast</a></h5> <br>
                                      <h5><a href="#">MR Giveaway</a></h5> <br>
                                      <h5><a href="#">MR Prediction</a></h5> <br>
                                      <h5><a href="#">Talk Zone</a></h5> <br>
                                  </p>
                              </div>
                              <div id="footer-box" class="col-md-4">
                                  <h3 class="footer-header">Information</h3>
                                  <p class="footer-links">
                                      <h5><a href="#">About Us</a></h5> <br>
                                      <h5><a href="#">Advertise on MR</a></h5> <br>
                                      <h5><a href="/contact">Promote Music/Video</a></h5> <br>
                                      <h5><a href="/contact">Contact Us</a></h5> <br>
                                  </p>
                              </div>
                              <div id="footer-box" class="col-md-4">
                                  <h3 class="footer-header">Helpful Links</h3>
                                  <p class="footer-links">
                                      <h5><a href="#">MR Music Promo Packages</a></h5> <br>
                                      <h5><a href="#">Music Reel TV</a></h5> <br>
                                      <h5><a href="#">MR Reviews</a></h5> <br>
                                      <h5><a href="#">More</a></h5> <br>
                                  </p>
                              </div>
                          </div> 
                   
                      </div> 
                  </div>
                  <p class="text-center"> <hr style="border: 0.5pt solid #fff"></p>
                 <p style="color: #fff;" class="text-center">Music Reel &copy; 2020</p>
            </div>
        </footer>
    </div>
</body>
</html>
