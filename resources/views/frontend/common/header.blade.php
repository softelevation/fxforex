<!DOCTYPE html>
<html>

<head>
    <title>Fx-Forex Trading</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
</head>
<header>
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="{{ url('/') }}">
        <img src="{{ asset('assets/images/logo1.png') }}" style="width: 160px;  height: 60px;">

      </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menubartop" aria-controls="menubartop" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        <div class="collapse navbar-collapse" id="menubartop">
           
            <ul class="navbar-nav mr-auto">
     
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Trade
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="#">Webtrader</a>
          <a class="dropdown-item" href="#">Metatrader </a>
           <a class="dropdown-item" href="#"> Mobile App</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Assets
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Forex Trading</a>
          <a class="dropdown-item" href="#">Cryptocurrency Trading </a>
           <a class="dropdown-item" href="#">CFD Trading</a>
           <a class="dropdown-item" href="#">  Indices</a>
          <a class="dropdown-item" href="#">Stock Trading </a>
           <a class="dropdown-item" href="#">Commodity Trading</a>
           <a class="dropdown-item" href="#"> Investing in Oil</a>
          <a class="dropdown-item" href="#">EUR / USD</a>
           <a class="dropdown-item" href="#">Gold and Silver</a>
           <a class="dropdown-item" href="#"> EUR / GBP</a>
         </li> 
         <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Education Center
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Webinars</a>
         <a class="dropdown-item" href="#">eBooks</a>
        <a class="dropdown-item" href="#">V.O.D</a>
        <a class="dropdown-item" href="#"> Courses</a>
          <a class="dropdown-item" href="#">Tutorials</a>
        <a class="dropdown-item" href="#">Articles</a>
        <a class="dropdown-item" href="#">Glossary</a>
       <a class="dropdown-item" href="#">Economic Calendar</a>
       <a class="dropdown-item" href="#">FAQ</a>
       <a class="dropdown-item" href="#">       Forex Trading</a>
          
         </li>



    </ul>
            <ul class="navbar-nav ml-auto">
               @guest

                 @if (Route::has('register'))
                    <li class="nav-item different-back">
                      <a class="nav-link" href="{{ route('register') }}">{{ __('Open Account') }}</a>
                    </li>
                  @endif
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Sign In') }}</a>
                    </li>

                @else
                      <li class="nav-item dropdown">
                          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              {{ Auth::user()->name }} <span class="caret"></span>
                          </a>

                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                            <a class="dropdown-item" href="{{ url('home') }}">
                                  {{ __('My Dashboard') }}
                              </a>

                              
                              <a class="dropdown-item" href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                  {{ __('Logout') }}
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  @csrf
                              </form>

                          </div>
                      </li>


                @endguest
            </ul>
        </div>
    </nav>
</header>