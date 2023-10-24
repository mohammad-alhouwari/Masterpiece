@extends('pages.layouts.master')

@section('title', 'Islamiyat')


@section('CSS')
    <link rel="stylesheet" href="{{ asset('userSide/css/about.css') }}">
@endsection

@section('content')
    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>من نحن</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index.html">الرئيسية<span class="lnr lnr-arrow-right"></span></a>
                        <a href="about.html">من نحن</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!-- About Us Content -->
    {{-- <section class="about_us_area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about_img">
                    <img class="img-fluid" src="img/about-us.jpg" alt="">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="about_us_content">
                    <h2 class="display-4" style=" color: orange;">من نحن</h2>
                    <p class="lead">
                        نحن رفقاء في رحلتك نحو التقوى والتأمل. متجرنا الإسلامي مكان يجمع بين العلم والإيمان، نقدم منتجات تمنح قيمًا وتلهم حياةً متراثيةً معاصرة.
                    </p>
                    <h4 class="mt-4" style=" color: orange;">رؤيتنا</h4>
                    <p>
                        أن نكون المكان الأفضل للبحث عن المنتجات الإسلامية الراقية والمتميزة في جميع أنحاء العالم.
                    </p>
                    <h4 style=" color: orange;">رسالتنا</h4>
                    <p>
                        تقديم المنتجات والخدمات ذات الجودة العالية التي تعزز القيم والتوجهات الإسلامية للأفراد والأسر.
                    </p>
                    <h4 style=" color: orange;">قيمنا</h4>
                    <ul class="list-group">
                        <li class="list-group-item"><i class="lnr lnr-checkmark-circle"></i> الالتزام بالأخلاق والقيم الإسلامية</li>
                        <li class="list-group-item"><i class="lnr lnr-checkmark-circle"></i> التفاني في تقديم الخدمة للعملاء</li>
                        <li class="list-group-item"><i class="lnr lnr-checkmark-circle"></i> التميز والابتكار</li>
                        <li class="list-group-item"><i class="lnr lnr-checkmark-circle"></i> تعزيز التواصل والتعلم المستمر</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section> --}}

    <div class="container-book" style="">
        <div class="book-wrapper">
            <div class="book-cover">
                <img src="https://github.com/slyka85/assets/blob/master/bookcover2.png?raw=true" alt=""
                    width="100%">
                {{-- <img src="https://mcdn.wallpapersafari.com/medium/80/42/f50qwo.jpg" alt=""> --}}
                {{-- <img src="https://mcdn.wallpapersafari.com/medium/59/87/V9iIpx.jpg" alt=""> --}}
            </div>
            <div id="bookAbout" class="pages-container">
                <div class="pages">
                    @php
                        $pageNum = 1;
                    @endphp
                    @foreach ($generals as $general)
                        <div class="page-num-{{ $pageNum }}">
                            <div class="pages-content">
                                <div class="pages-background"></div>
                                <div class="content-inner">
                                    <h2><b>{{ $general->title }}</b></h2>
                                    @if ($general->media1)
                                        @if ($general->mediaType1 == 'image')
                                            <img class="aboutImage" src="{{ url($general->media1) }}" alt="">
                                        @elseif ($general->mediaType1 == 'video')
                                            <video class="aboutVideo" loop muted autoplay style="position: ">
                                                <source src="{{ url($general->media1) }}" type="video/mp4">
                                                this is a video
                                            </video>
                                        @endif
                                    @endif
                                    <div class="text">
                                        <p>{{ $general->text }}</p>
                                    </div>
                                    @if ($general->media2)
                                        <div class="pageImg{{ $pageNum }}"></div>
                                        <style>
                                            .pageImg{{ $pageNum }} {
                                                background: linear-gradient(rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0.1)), url({{ url($general->media2) }});
                                                background-size: cover;
                                                opacity: 0.2;
                                                width: 100%;
                                                height: 100%;
                                                position: absolute;
                                                left: 0;
                                                top: 0;
                                            }
                                        </style>
                                    @endif
                                </div>
                            </div>
                        </div>
                        @php
                            $pageNum++;
                        @endphp
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- End About Us Content -->
@endsection
@section('JS')
    {{-- <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script> --}}
    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js'></script>
    <script src="{{ asset('userSide/js/about.js') }}"></script>
    {{-- <script  src="./script.js"></script> --}}
@endsection
