<!DOCTYPE html>
<html>

<head>
    <title>Fx-Forex Trading</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
    <link rel="stylesheet" href="https://fontawesome.com/v4.7.0/assets/font-awesome/css/font-awesome.css">
</head>
<header>
    <nav id="myHeader" class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="{{ url('/') }}">
        <img src="{{ asset('assets/images/logo1.png') }}" class="logo-1" style="width: 160px;  height: 60px;"> 
        <img src="{{ asset('assets/images/logo-2.png') }}" class="logo-2" style="width: 160px;  height: 60px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menubartop" aria-controls="menubartop" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        <div class="collapse navbar-collapse" id="menubartop">
           
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
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:;">{{ __('Deposit') }}</a>
                    </li>

                      <li class="nav-item dropdown">
                          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              {{ Auth::user()->name }} <span class="caret"></span>
                          </a>

                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                            <a class="dropdown-item" href="{{ url('myaccount') }}">
                                  {{ __('Client Area') }}
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