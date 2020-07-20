<!DOCTYPE html>
<html>

<head>
    <title>Fx-Forex Trading</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,300&display=swap" rel="stylesheet">

</head> 
<header>
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="{{ url('/page') }}">
        <img src="{{ asset('assets/images/logo1.png') }}" style="width: 160px;  height: 60px;">
        </a>
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
                      <li class="nav-item dropdown">
                          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              {{ Auth::user()->name }} <span class="caret"></span>
                          </a>

                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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

    <main class="py-4">
            @yield('content')
    </main>

<section class="footer-main-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Award-winning broker</h2>
                <div class="d-flex awards-wrapper">
                    <div class="awards-images">
                        <img src="assets/images/award1.png" alt="">
                    </div>
                    <div class="awards-images">
                        <img src="assets/images/award2.png" alt="Certified FMD">
                    </div>
                    <div class="awards-images">
                        <img src="assets/images/award3.png" alt="A to Z Approved">
                    </div>
                    <div class="awards-images">
                        <img src="assets/images/award4.png" alt="Best Educational Broker">
                    </div>
                </div>
                <div class="d-flex bottom-social-box">
                    <div><a href="javascript:void(0);"><i
                                class="fab fa-facebook-f"></i></a></div>
                    <div><a href="javascript:void(0);"><i
                                class="fab fa-instagram"></i></a></div>
                    <div><a href="javascript:void(0);"><i class="fab fa-twitter"></i></a></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="footer-bottom-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p>Copyright © 2020 <a href="javascript:void(0);">Trading Website</a>. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript" src="{{ asset('assets/js/jquery.slim.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/custom.js') }}"></script>


</body>

</html>