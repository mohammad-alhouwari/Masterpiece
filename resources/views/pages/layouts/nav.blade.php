<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('userSide/img/fav.png') }}">
    <!-- Author Meta -->
    <meta name="author" content="CodePixar">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>@yield('title')</title>
    <!--
  CSS
  ============================================= -->
    <link rel="stylesheet" href="{{ asset('userSide/css/linearicons.css') }}">
    <link rel="stylesheet" href="{{ asset('userSide/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('userSide/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('userSide/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('userSide/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('userSide/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('userSide/css/nouislider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('userSide/css/ion.rangeSlider.css') }}" />
    <link rel="stylesheet" href="{{ asset('userSide/css/ion.rangeSlider.skinFlat.css') }}" />
    <link rel="stylesheet" href="{{ asset('userSide/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('userSide/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('userSide/css/arabic.css') }}">
    <link rel="stylesheet" href="{{ asset('userSide/css/card.css') }}">
</head>

<body>

    <!-- Start Header Area -->
    <header class="header_area sticky-header">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light main_box">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="{{ Route('home') }}"><img height="60px"
                            src="{{ url('userSide/img/logo.png') }}" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item active @yield('home')"><a class="nav-link"
                                    href="index.html">الرئيسية</a></li>

                            <li class="nav-item submenu dropdown ">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false">المتجر</a>
                                <ul class="dropdown-menu">
                                    @foreach ($navCategories as $navCat)
                                        <li class="nav-item"><a class="nav-link"
                                                href="{{ route('shop', $navCat->id) }}">{{ $navCat->name }}</a></li>
                                    @endforeach
                                </ul>
                            </li>

                            <li class="nav-item "><a class="nav-link" href="about_us.html">من نحن</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact.html">تواصل معنا</a></li>






                            @if (Auth::check())
                                <li> <a href="{{ route('profile.edit', [Auth::user()]) }}"
                                        class="nav-item">{{ Auth::user()->name }}</a></li>
                                <form style="display: inline-block" method="POST" class="nav-item"
                                    action="{{ route('logout') }}">
                                    @csrf

                                    <li> <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </a></li>
                                </form>
                            @else
                                <li class="nav-item"><a class=" primary-btn small" href="{{ route('login') }}"> تسجيل الدخول </a>
                                </li>
                            @endif






                            {{-- <li class="nav-item"><a class=" primary-btn small" href="login.html"> تسجيل الدخول </a></li> --}}


                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="nav-item"><a href="{{route('cart')}}" class="cart"><span class="ti-bag"></span></a>
                            </li>
                            <li class="nav-item">
                                <button class="search"><span class="lnr lnr-magnifier"
                                        id="search"></span></button>
                            </li>

                        </ul>

                    </div>
                </div>
            </nav>
        </div>
        <div class="search_input" id="search_input_box">
            <div class="container">
                <form class="d-flex justify-content-between">
                    <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                    <button type="submit" class="btn"></button>
                    <span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
                </form>
            </div>
        </div>
    </header>
    <!-- End Header Area -->
