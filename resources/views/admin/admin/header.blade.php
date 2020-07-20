
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Forex</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png"> -->

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/adminpanel/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/custom.css') }}">
    <!-- <link rel="stylesheet" href="css/style.css"> -->

    
</head>

<body>

<div id="preloader" class="d-none">
        <div class="loader d-none">
            <div class="loader__bar"></div>
            <div class="loader__bar"></div>
            <div class="loader__bar"></div>
            <div class="loader__bar"></div>
            <div class="loader__bar"></div>
            <div class="loader__ball"></div>
        </div>
    </div>


    <!-- header -->
    <div class="header">
        <div class="nav-header">
            <div class="brand-logo">
                <a href="/">
                    <!-- <i class="icofont icofont-dart"></i> -->
                    <!-- <span class="mini brand-title">
                         <img src="{{ asset('assets/images/logo2.png') }}" alt=""  style="width: 60px;  height: 60px;">
                    </span> -->
                    <span class="brand-title">
                        <img src="{{ asset('assets/images/logo3.png') }}" style="width: 180px;  height: 60px;">
                    </span>
                </a>
            </div>
        </div>

        <div class="header-content">
            <div class="header-left d-flex">    
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                    </div> 

                </div>
            </div>
        </div>


        <div class="navbar-custom-menu pull-right d-flex nav-right">
          
       
            <div class="dropdown">
                <a class="dropdown-toggle user-profile-dropdown" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="user-img">
                        <img src="../assets/images/user.png" alt="">
                    </span>
                    <span class="user-name">Admin <i class="fa fa-cog"></i></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">
                        <i class="fa fa-cog"></i> Setting
                    </a>
                    <a class="dropdown-item" href="/logout">
                        <i class="fa fa-power-off" aria-hidden="true"></i> Logout 
                    </a>
                </div>
            </div>

        </div>

    </div>
    <!-- #/ header -->
