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
                    <div class="page-num-1">
                        <div class="pages-content">
                            <div class="pages-background"></div>
                            <div class="content-inner">
                                <h1><b>منين احنا</b></h1>
                                <div class="text">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas ea non vitae a
                                        assumenda sint quod, dolores laboriosam velit corrupti nobis cupiditate perspiciatis
                                        natus exercitationem, architecto esse ratione blanditiis! Itaque.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="page-num-2">
                        <div class="pages-content">
                            <div class="content-inner">
                                <h1>Chapter 2</h1>
                                <div class="text">
                                    <video class="video__container" autoplay muted loop>
                                        <source class="video__media"
                                            src="https://player.vimeo.com/external/370331493.sd.mp4?s=e90dcaba73c19e0e36f03406b47bbd6992dd6c1c&profile_id=139&oauth2_token_id=57447761"
                                            type="video/mp4">
                                    </video>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos, cumque autem! Magni
                                        eligendi qui officiis? Fugit iste voluptatum atque voluptatibus totam! Nisi
                                        accusantium saepe hic. Aut nobis nesciunt mollitia error.</p>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam odio modi, hic
                                        ratione fugit quod natus, excepturi quae minus voluptatum cupiditate quia magnam
                                        eveniet ex, reiciendis voluptates ipsam iste laudantium!</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati deserunt magnam,
                                        at perspiciatis aut. Voluptatem consequuntur neque quisquam?</p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="page-num-3">
                        <div class="pages-content">
                            <div class="content-inner">

                                <h1>Chapter 3</h1>
                                <div class="text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate voluptas
                                        molestiae tempore amet adipisci dicta incidunt nisi alias distinctio fugit
                                        blanditiis dignissimos nobis deserunt eum consequuntur ipsam, perspiciatis numquam
                                        repellendus.</p>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus in odio deserunt
                                        est hic minima inventore, mollitia, officia aspernatur eaque voluptatibus? Amet,
                                        molestias adipisci delectus ea eligendi sit numquam illo.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="page-num-4">
                        <div class="pages-content">
                            <div class="content-inner">
                                <h1>النهاية</h1>
                                <div class="pageImg"></div>
                            </div>
                        </div>
                    </div>
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
