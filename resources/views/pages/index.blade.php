@extends('pages.layouts.master')

@section('title','Islamiyat')

@section('content')
    <!-- start banner Area -->
    <section class="banner-area">
        <div class="container">
            <div class="row fullscreen align-items-center justify-content-start">
                <div class="col-lg-12">
                    <div class="bd-example">
                        <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
                            <div class="carousel-inner row align-items-center">


                                <div class="carousel-item active ">
                                    <img src="{{ asset('userSide/img/banner/banner-img.png') }}"
                                        class="d-block w-50 mx-auto mt-5" alt="...">
                                    <div class=" text-center d-none d-md-block">
                                        <h3 style=" color: orangered; text-shadow: 0 0 3px white, 0 0 5px black;">الحمد لله
                                            ولااله الاالله والله اكبر</h3>
                                        <p
                                            style=" color: black; text-shadow: 0 0 3px orangered, 0 0 5px black; max-width: 30%; margin: auto;">
                                            بِسۡمِ ٱللَّهِ ٱلرَّحۡمَٰنِ ٱلرَّحِيمِ۝١
                                            ٱلۡحَمۡدُ لِلَّهِ رَبِّ ٱلۡعَٰلَمِينَ ۝٢
                                            ٱلرَّحۡمَٰنِ ٱلرَّحِيمِ ۝۳ مَٰلِكِ يَوۡمِ ٱلدِّينِ ۝٤
                                            إِيَّاكَ نَعۡبُدُ وَإِيَّاكَ نَسۡتَعِينُ ۝٥ ٱهۡدِنَا
                                            ٱلصِّرَٰطَ ٱلۡمُسۡتَقِيمَ ۝٦ صِرَٰطَ ٱلَّذِينَ أَنۡعَمۡتَ
                                            عَلَيۡهِمۡ غَيۡرِ ٱلۡمَغۡضُوبِ عَلَيۡهِمۡ
                                            وَلَا ٱلضَّآلِّينَ ۝٧

                                        </p>
                                    </div>
                                </div>


                                <div class="carousel-item">
                                    <img src="userSide/img/banner/banner-img.png" class="d-block w-50 mx-auto mt-5" alt="...">
                                    <div class=" text-center d-none d-md-block">
                                        <h3 style=" color: orangered; text-shadow: 0 0 3px white, 0 0 5px black;">اعوذ بالله
                                            من الشيطان الرجيم</h3>
                                        <p
                                            style=" color: black; text-shadow: 0 0 3px orangered, 0 0 5px black; max-width: 30%; margin: auto;">
                                            قُلۡ هُوَ ٱللَّهُ أَحَدٌ ۝١ ٱللَّهُ ٱلصَّمَدُ ۝٢ لَمۡ يَلِدۡ وَلَمۡ يُولَدۡ ۝٣
                                            وَلَمۡ يَكُن لَّهُۥ كُفُوًا أَحَدُۢ ۝٤

                                        </p>
                                    </div>
                                </div>



                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button"
                                data-slide="prev">
                                <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
                                <img height="60px" src="userSide/img/banner/prev.png" alt="">
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button"
                                data-slide="next">
                                <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
                                <img height="60px" src="userSide/img/banner/next.png" alt="">
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->


    <!-- start features Area -->
    <section class="features-area section_gap">
        <div class="container">
            <div class="row features-inner">
                <!-- single features -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-features">
                        <div class="f-icon">
                            <img src="img/features/f-icon1.png" alt="">
                        </div>
                        <h6>خدمة التوصيل السريع</h6>
                        <p>توصيل لجميع مناطق المملكة</p>
                    </div>
                </div>
                <!-- single features -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-features">
                        <div class="f-icon">
                            <img src="img/features/f-icon2.png" alt="">
                        </div>
                        <h6>سياسة الارجاع</h6>
                        <p>بنود الارجاع والاستبدال</p>
                    </div>
                </div>
                <!-- single features -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-features">
                        <div class="f-icon">
                            <img src="img/features/f-icon3.png" alt="">
                        </div>
                        <h6>خدمة الدعم الفني</h6>
                        <p>إلك الله</p>
                    </div>
                </div>
                <!-- single features -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-features">
                        <div class="f-icon">
                            <img src="img/features/f-icon4.png" alt="">
                        </div>
                        <h6>طرق الدفع الآمن</h6>
                        <p>ما دخل جيبي لا يخرج</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end features Area -->

    <!-- Start category Area -->
    <!-- <section class="category-area">
      <div class="container">
       <div class="row justify-content-center">
        
        
        <div class="col-lg-12 col-md-12 ">
         <div class="row justify-content-center">
          <div class="col-lg-4 col-md-6">
           <div class="single-deal">
            <div class="overlay"></div>
            <img class="img-fluid w-100" src="img/category/c1.jpg" alt="">
            <a href="img/category/c1.jpg" class="img-pop-up" target="_blank">
             <div class="deal-details">
              <h6 class="deal-title">كتب دينية</h6>
             </div>
            </a>
           </div>
          </div>
          <div class="col-lg-4 col-md-6">
           <div class="single-deal">
            <div class="overlay"></div>
            <img class="img-fluid w-100" src="img/category/c2.jpg" alt="">
            <a href="img/category/c2.jpg" class="img-pop-up" target="_blank">
             <div class="deal-details">
              <h6 class="deal-title">ملابس شرعية</h6>
             </div>
            </a>
           </div>
          </div>
          <div class="col-lg-4 col-md-6">
           <div class="single-deal">
            <a href="img/category/c3.jpg" class="img-pop-up" target="_blank">
            <div class="overlay"></div>
            <img class="img-fluid w-100" src="img/category/c3.jpg" alt="">
             <div class="deal-details">
              <h6 class="deal-title">مناسبات اسلامية</h6>
             </div>
            </a>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </section> -->

    <section class="card-area">
        @foreach ($categories as $category)
            <section class="card-section">
                <div class="card">
                    <div class="flip-card">
                        <div class="flip-card__container">
                            <div class="card-front">
                                <div class="card-front__tp card-front__tp--city">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"
                                        class="card-front__icon">
                                        <path
                                            d="M400 0C405 0 409.8 2.371 412.8 6.4C447.5 52.7 490.9 81.34 546.3 117.9C551.5 121.4 556.9 124.9 562.3 128.5C591.3 147.7 608 180.2 608 214.6C608 243.1 596.7 269 578.2 288H221.8C203.3 269 192 243.1 192 214.6C192 180.2 208.7 147.7 237.7 128.5C243.1 124.9 248.5 121.4 253.7 117.9C309.1 81.34 352.5 52.7 387.2 6.4C390.2 2.371 394.1 0 400 0V0zM288 440C288 426.7 277.3 416 264 416C250.7 416 240 426.7 240 440V512H192C174.3 512 160 497.7 160 480V352C160 334.3 174.3 320 192 320H608C625.7 320 640 334.3 640 352V480C640 497.7 625.7 512 608 512H560V440C560 426.7 549.3 416 536 416C522.7 416 512 426.7 512 440V512H448V453.1C448 434.1 439.6 416.1 424.1 404.8L400 384L375 404.8C360.4 416.1 352 434.1 352 453.1V512H288V440zM70.4 5.2C76.09 .9334 83.91 .9334 89.6 5.2L105.6 17.2C139.8 42.88 160 83.19 160 126V128H0V126C0 83.19 20.15 42.88 54.4 17.2L70.4 5.2zM0 160H160V296.6C140.9 307.6 128 328.3 128 352V480C128 489.6 130.1 498.6 133.8 506.8C127.3 510.1 119.9 512 112 512H48C21.49 512 0 490.5 0 464V160z" />
                                    </svg>
                                    <h2 class="card-front__heading">
                                        {{ $category->name }}
                                    </h2>
                                </div>
                                <div class="card-front__bt">
                                    <p class="card-front__text-view card-front__text-view--city">
                                        رؤية التفاصيل
                                    </p>
                                </div>
                            </div>
                            <div class="card-back">
                                <video class="video__container" style="height: 320px;" autoplay muted loop>
                                    <source src="{{ url('videos/' . $category->video) }}" type="video/mp4">
                                    this is a video
                                </video>
                            </div>
                        </div>
                    </div>
                    <div class="inside-page">
                        <div class="inside-page__container">
                            <h3 class="inside-page__heading inside-page__heading--city">
                                {{ $category->name }}
                            </h3>
                            <p class="inside-page__text">
                                {{ $category->description }}
                            </p>
                            <a href="{{route('shop',$category->id)}}" class="inside-page__btn inside-page__btn--city">مشاهدة المزيد</a>
                        </div>
                    </div>
                </div>
            </section>
        @endforeach
    </section>
    <!-- End category Area -->

    <!-- Start exclusive deal Area -->
    <section class="exclusive-deal-area">
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6 no-padding exclusive-left">
                    <div class="row clock_sec clockdiv" id="clockdiv">
                        <div class="col-lg-12">
                            <h1>خصومات الصيف!</h1>
                            <p>تعالوا واستمتعوا بأقوى خصومات الصيف مع تشكيلة مميزة من المنتجات!</p>
                        </div>
                        <div class="col-lg-12">
                            <div class="row clock-wrap">
                                <div class="col clockinner1 clockinner">
                                    <h1 class="days">150</h1>
                                    <span class="smalltext">يوم</span>
                                </div>
                                <div class="col clockinner clockinner1">
                                    <h1 class="hours">23</h1>
                                    <span class="smalltext">ساعة</span>
                                </div>
                                <div class="col clockinner clockinner1">
                                    <h1 class="minutes">47</h1>
                                    <span class="smalltext">دقيقة</span>
                                </div>
                                <div class="col clockinner clockinner1">
                                    <h1 class="seconds">59</h1>
                                    <span class="smalltext">ثانية</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="" class="primary-btn">تسوق الأن</a>
                </div>
                <div class="col-lg-6 no-padding exclusive-right ">
                    <div class="active-exclusive-product-slider">
                        <!-- single exclusive carousel -->
                        <div class="single-exclusive-slider row justify-content-center" style="padding: 20px;">
                            <img class="img-fluid" src="img/product/e-p1.png" alt="">
                            <div class="product-details">
                                <div class="price">
                                    <h6>JD30.00</h6>
                                    <h6 class="l-through">JD50.00</h6>
                                </div>
                                <h4>باكيج المصحف الأنيق</h4>
                                <div class="add-bag d-flex align-items-center justify-content-center">
                                    <a class="add-btn" href=""><span class="ti-bag"></span></a>
                                    <span class="add-text text-uppercase">أضف للحقيبة</span>
                                </div>
                            </div>
                        </div>

                        <!-- single exclusive carousel -->
                        <div class="single-exclusive-slider row justify-content-center" style="padding: 20px;">
                            <img class="img-fluid" src="img/product/e-p2.png" alt="">
                            <div class="product-details">
                                <div class="price">
                                    <h6>JD30.00</h6>
                                    <h6 class="l-through">JD50.00</h6>
                                </div>
                                <h4>باكيج المصحف الأنيق</h4>
                                <div class="add-bag d-flex align-items-center justify-content-center">
                                    <a class="add-btn" href=""><span class="ti-bag"></span></a>
                                    <span class="add-text text-uppercase">اضيف للحقيبة</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End exclusive deal Area -->

















    <!-- start product Area -->
    <section class="owl-carousel active-product-area section_gap">
        <!-- single product slide -->
        <div class="single-product-slider">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <div class="section-title"><br>
                            <h1>أحدث منتجاتنا</h1>
                            <p>ابتكاراتنا الجديدة تضيف لمسة من التميّز إلى متجرنا الإسلامي. تجربة تسوق متفرّدة تجمع بين
                                العراقة والحداثة، حيث نقدّم منتجات تعكس قيمنا وتلبي احتياجات المجتمع.</p>
                        </div>
                    </div>
                </div>
                <div class="row">


                    <!-- single product -->
                    <div class="col-lg-3 col-md-6">
                        <div class="single-product">
                            <img class="img-fluid" src="img/product/p1.jpg" alt="">
                            <div class="product-details">
                                <h6>ستاند للمصحف الشريف</h6>
                                <div class="price">
                                    <h6>JD150.00</h6>
                                    <h6 class="l-through">JD210.00</h6>
                                </div>
                                <div class="prd-bottom">

                                    <a href="single-product.html" class="social-info">
                                        <span class="ti-bag"></span>
                                        <p class="hover-text">أضيف للحقيبة</p>
                                    </a>
                                    <a href="single-product.html" class="social-info">
                                        <span class="lnr lnr-heart"></span>
                                        <p class="hover-text">أضف للمفضلة</p>
                                    </a>
                                    <a href="single-product.html" class="social-info">
                                        <span class="lnr lnr-sync"></span>
                                        <p class="hover-text">مقارنة المنتج</p>
                                    </a>
                                    <a href="single-product.html" class="social-info">
                                        <span class="lnr lnr-move"></span>
                                        <p class="hover-text">رؤية المزيد</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- single product -->
                    <div class="col-lg-3 col-md-6">
                        <div class="single-product">
                            <img class="img-fluid" src="img/product/p2.jpg" alt="">
                            <div class="product-details">
                                <h6>ستاند للمصحف الشريف</h6>
                                <div class="price">
                                    <h6>JD150.00</h6>
                                    <h6 class="l-through">JD210.00</h6>
                                </div>
                                <div class="prd-bottom">

                                    <a href="single-product.html" class="social-info">
                                        <span class="ti-bag"></span>
                                        <p class="hover-text">أضيف للحقيبة</p>
                                    </a>
                                    <a href="single-product.html" class="social-info">
                                        <span class="lnr lnr-heart"></span>
                                        <p class="hover-text">أضف للمفضلة</p>
                                    </a>
                                    <a href="single-product.html" class="social-info">
                                        <span class="lnr lnr-sync"></span>
                                        <p class="hover-text">مقارنة المنتج</p>
                                    </a>
                                    <a href="single-product.html" class="social-info">
                                        <span class="lnr lnr-move"></span>
                                        <p class="hover-text">رؤية المزيد</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single product -->
                    <div class="col-lg-3 col-md-6">
                        <div class="single-product">
                            <img class="img-fluid" src="img/product/p3.jpg" alt="">
                            <div class="product-details">
                                <h6>ستاند للمصحف الشريف</h6>
                                <div class="price">
                                    <h6>JD150.00</h6>
                                    <h6 class="l-through">JD210.00</h6>
                                </div>
                                <div class="prd-bottom">
                                    <a href="single-product.html" class="social-info">
                                        <span class="ti-bag"></span>
                                        <p class="hover-text">أضيف للحقيبة</p>
                                    </a>
                                    <a href="single-product.html" class="social-info">
                                        <span class="lnr lnr-heart"></span>
                                        <p class="hover-text">أضف للمفضلة</p>
                                    </a>
                                    <a href="single-product.html" class="social-info">
                                        <span class="lnr lnr-sync"></span>
                                        <p class="hover-text">مقارنة المنتج</p>
                                    </a>
                                    <a href="single-product.html" class="social-info">
                                        <span class="lnr lnr-move"></span>
                                        <p class="hover-text">رؤية المزيد</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single product -->
                    <div class="col-lg-3 col-md-6">
                        <div class="single-product">
                            <img class="img-fluid" src="img/product/p4.jpg" alt="">
                            <div class="product-details">
                                <h6>ستاند للمصحف الشريف</h6>
                                <div class="price">
                                    <h6>JD150.00</h6>
                                    <h6 class="l-through">JD210.00</h6>
                                </div>
                                <div class="prd-bottom">

                                    <a href="single-product.html" class="social-info">
                                        <span class="ti-bag"></span>
                                        <p class="hover-text">أضيف للحقيبة</p>
                                    </a>
                                    <a href="single-product.html" class="social-info">
                                        <span class="lnr lnr-heart"></span>
                                        <p class="hover-text">أضف للمفضلة</p>
                                    </a>
                                    <a href="single-product.html" class="social-info">
                                        <span class="lnr lnr-sync"></span>
                                        <p class="hover-text">مقارنة المنتج</p>
                                    </a>
                                    <a href="single-product.html" class="social-info">
                                        <span class="lnr lnr-move"></span>
                                        <p class="hover-text">رؤية المزيد</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single product -->
                    <div class="col-lg-3 col-md-6">
                        <div class="single-product">
                            <img class="img-fluid" src="img/product/p5.jpg" alt="">
                            <div class="product-details">
                                <h6>ستاند للمصحف الشريف</h6>
                                <div class="price">
                                    <h6>JD150.00</h6>
                                    <h6 class="l-through">JD210.00</h6>
                                </div>
                                <div class="prd-bottom">

                                    <a href="single-product.html" class="social-info">
                                        <span class="ti-bag"></span>
                                        <p class="hover-text">أضيف للحقيبة</p>
                                    </a>
                                    <a href="single-product.html" class="social-info">
                                        <span class="lnr lnr-heart"></span>
                                        <p class="hover-text">أضف للمفضلة</p>
                                    </a>
                                    <a href="single-product.html" class="social-info">
                                        <span class="lnr lnr-sync"></span>
                                        <p class="hover-text">مقارنة المنتج</p>
                                    </a>
                                    <a href="single-product.html" class="social-info">
                                        <span class="lnr lnr-move"></span>
                                        <p class="hover-text">رؤية المزيد</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single product -->
                    <div class="col-lg-3 col-md-6">
                        <div class="single-product">
                            <img class="img-fluid" src="img/product/p6.jpg" alt="">
                            <div class="product-details">
                                <h6>ستاند للمصحف الشريف</h6>
                                <div class="price">
                                    <h6>JD150.00</h6>
                                    <h6 class="l-through">JD210.00</h6>
                                </div>
                                <div class="prd-bottom">

                                    <a href="single-product.html" class="social-info">
                                        <span class="ti-bag"></span>
                                        <p class="hover-text">أضيف للحقيبة</p>
                                    </a>
                                    <a href="single-product.html" class="social-info">
                                        <span class="lnr lnr-heart"></span>
                                        <p class="hover-text">أضف للمفضلة</p>
                                    </a>
                                    <a href="single-product.html" class="social-info">
                                        <span class="lnr lnr-sync"></span>
                                        <p class="hover-text">مقارنة المنتج</p>
                                    </a>
                                    <a href="single-product.html" class="social-info">
                                        <span class="lnr lnr-move"></span>
                                        <p class="hover-text">رؤية المزيد</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single product -->
                    <div class="col-lg-3 col-md-6">
                        <div class="single-product">
                            <img class="img-fluid" src="img/product/p7.jpg" alt="">
                            <div class="product-details">
                                <h6>ستاند للمصحف الشريف</h6>
                                <div class="price">
                                    <h6>JD150.00</h6>
                                    <h6 class="l-through">JD210.00</h6>
                                </div>
                                <div class="prd-bottom">

                                    <a href="single-product.html" class="social-info">
                                        <span class="ti-bag"></span>
                                        <p class="hover-text">أضيف للحقيبة</p>
                                    </a>
                                    <a href="single-product.html" class="social-info">
                                        <span class="lnr lnr-heart"></span>
                                        <p class="hover-text">أضف للمفضلة</p>
                                    </a>
                                    <a href="single-product.html" class="social-info">
                                        <span class="lnr lnr-sync"></span>
                                        <p class="hover-text">مقارنة المنتج</p>
                                    </a>
                                    <a href="single-product.html" class="social-info">
                                        <span class="lnr lnr-move"></span>
                                        <p class="hover-text">رؤية المزيد</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single product -->
                    <div class="col-lg-3 col-md-6">
                        <div class="single-product">
                            <img class="img-fluid" src="img/product/p8.jpg" alt="">
                            <div class="product-details">
                                <h6>ستاند للمصحف الشريف</h6>
                                <div class="price">
                                    <h6>JD150.00</h6>
                                    <h6 class="l-through">JD210.00</h6>
                                </div>
                                <div class="prd-bottom">

                                    <a href="single-product.html" class="social-info">
                                        <span class="ti-bag"></span>
                                        <p class="hover-text">أضيف للحقيبة</p>
                                    </a>
                                    <a href="single-product.html" class="social-info">
                                        <span class="lnr lnr-heart"></span>
                                        <p class="hover-text">أضف للمفضلة</p>
                                    </a>
                                    <a href="single-product.html" class="social-info">
                                        <span class="lnr lnr-sync"></span>
                                        <p class="hover-text">مقارنة المنتج</p>
                                    </a>
                                    <a href="single-product.html" class="social-info">
                                        <span class="lnr lnr-move"></span>
                                        <p class="hover-text">رؤية المزيد</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- single product slide -->
        <div class="single-product-slider">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <div class="section-title"><br>
                            <h1>قادم قريباً</h1>
                            <p>قريباً في متجرنا، نحمل لكم مفاجأة لا تُنسى! ابقوا على اطلاع، حيث نعمل بجد على تحضير منتج جديد
                                سيغير نظرتكم للتسوق. استعدوا لتجربة تسوق مميزة ومبهجة مع منتج يلبي تطلعاتكم ويفاجئكم بجودته
                                وابتكاره.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- single product -->
                    <div class="col-lg-3 col-md-6">
                        <div class="single-product">
                            <img class="img-fluid" src="img/product/p6.jpg" alt="">
                            <div class="product-details">
                                <h6>ستاند للمصحف الشريف</h6>
                                <div class="price">
                                    <h6>JD150.00</h6>
                                    <h6 class="l-through">JD210.00</h6>
                                </div>
                                <div class="prd-bottom">

                                    <a href="single-product.html" class="social-info">
                                        <span class="ti-bag"></span>
                                        <p class="hover-text">أضيف للحقيبة</p>
                                    </a>
                                    <a href="single-product.html" class="social-info">
                                        <span class="lnr lnr-heart"></span>
                                        <p class="hover-text">أضف للمفضلة</p>
                                    </a>
                                    <a href="single-product.html" class="social-info">
                                        <span class="lnr lnr-sync"></span>
                                        <p class="hover-text">مقارنة المنتج</p>
                                    </a>
                                    <a href="single-product.html" class="social-info">
                                        <span class="lnr lnr-move"></span>
                                        <p class="hover-text">رؤية المزيد</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single product -->
                    <div class="col-lg-3 col-md-6">
                        <div class="single-product">
                            <img class="img-fluid" src="img/product/p8.jpg" alt="">
                            <div class="product-details">
                                <h6>ستاند للمصحف الشريف</h6>
                                <div class="price">
                                    <h6>JD150.00</h6>
                                    <h6 class="l-through">JD210.00</h6>
                                </div>
                                <div class="prd-bottom">

                                    <a href="single-product.html" class="social-info">
                                        <span class="ti-bag"></span>
                                        <p class="hover-text">أضيف للحقيبة</p>
                                    </a>
                                    <a href="single-product.html" class="social-info">
                                        <span class="lnr lnr-heart"></span>
                                        <p class="hover-text">أضف للمفضلة</p>
                                    </a>
                                    <a href="single-product.html" class="social-info">
                                        <span class="lnr lnr-sync"></span>
                                        <p class="hover-text">مقارنة المنتج</p>
                                    </a>
                                    <a href="single-product.html" class="social-info">
                                        <span class="lnr lnr-move"></span>
                                        <p class="hover-text">رؤية المزيد</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single product -->
                    <div class="col-lg-3 col-md-6">
                        <div class="single-product">
                            <img class="img-fluid" src="img/product/p3.jpg" alt="">
                            <div class="product-details">
                                <h6>ستاند للمصحف الشريف</h6>
                                <div class="price">
                                    <h6>JD150.00</h6>
                                    <h6 class="l-through">JD210.00</h6>
                                </div>
                                <div class="prd-bottom">

                                    <a href="single-product.html" class="social-info">
                                        <span class="ti-bag"></span>
                                        <p class="hover-text">أضيف للحقيبة</p>
                                    </a>
                                    <a href="single-product.html" class="social-info">
                                        <span class="lnr lnr-heart"></span>
                                        <p class="hover-text">أضف للمفضلة</p>
                                    </a>
                                    <a href="single-product.html" class="social-info">
                                        <span class="lnr lnr-sync"></span>
                                        <p class="hover-text">مقارنة المنتج</p>
                                    </a>
                                    <a href="single-product.html" class="social-info">
                                        <span class="lnr lnr-move"></span>
                                        <p class="hover-text">رؤية المزيد</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single product -->
                    <div class="col-lg-3 col-md-6">
                        <div class="single-product">
                            <img class="img-fluid" src="img/product/p5.jpg" alt="">
                            <div class="product-details">
                                <h6>ستاند للمصحف الشريف</h6>
                                <div class="price">
                                    <h6>JD150.00</h6>
                                    <h6 class="l-through">JD210.00</h6>
                                </div>
                                <div class="prd-bottom">

                                    <a href="single-product.html" class="social-info">
                                        <span class="ti-bag"></span>
                                        <p class="hover-text">أضيف للحقيبة</p>
                                    </a>
                                    <a href="single-product.html" class="social-info">
                                        <span class="lnr lnr-heart"></span>
                                        <p class="hover-text">أضف للمفضلة</p>
                                    </a>
                                    <a href="single-product.html" class="social-info">
                                        <span class="lnr lnr-sync"></span>
                                        <p class="hover-text">مقارنة المنتج</p>
                                    </a>
                                    <a href="single-product.html" class="social-info">
                                        <span class="lnr lnr-move"></span>
                                        <p class="hover-text">رؤية المزيد</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single product -->
                    <div class="col-lg-3 col-md-6">
                        <div class="single-product">
                            <img class="img-fluid" src="img/product/p1.jpg" alt="">
                            <div class="product-details">
                                <h6>ستاند للمصحف الشريف</h6>
                                <div class="price">
                                    <h6>JD150.00</h6>
                                    <h6 class="l-through">JD210.00</h6>
                                </div>
                                <div class="prd-bottom">

                                    <a href="single-product.html" class="social-info">
                                        <span class="ti-bag"></span>
                                        <p class="hover-text">أضيف للحقيبة</p>
                                    </a>
                                    <a href="single-product.html" class="social-info">
                                        <span class="lnr lnr-heart"></span>
                                        <p class="hover-text">أضف للمفضلة</p>
                                    </a>
                                    <a href="single-product.html" class="social-info">
                                        <span class="lnr lnr-sync"></span>
                                        <p class="hover-text">مقارنة المنتج</p>
                                    </a>
                                    <a href="single-product.html" class="social-info">
                                        <span class="lnr lnr-move"></span>
                                        <p class="hover-text">رؤية المزيد</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single product -->
                    <div class="col-lg-3 col-md-6">
                        <div class="single-product">
                            <img class="img-fluid" src="img/product/p4.jpg" alt="">
                            <div class="product-details">
                                <h6>ستاند للمصحف الشريف</h6>
                                <div class="price">
                                    <h6>JD150.00</h6>
                                    <h6 class="l-through">JD210.00</h6>
                                </div>
                                <div class="prd-bottom">

                                    <a href="single-product.html" class="social-info">
                                        <span class="ti-bag"></span>
                                        <p class="hover-text">أضيف للحقيبة</p>
                                    </a>
                                    <a href="single-product.html" class="social-info">
                                        <span class="lnr lnr-heart"></span>
                                        <p class="hover-text">أضف للمفضلة</p>
                                    </a>
                                    <a href="single-product.html" class="social-info">
                                        <span class="lnr lnr-sync"></span>
                                        <p class="hover-text">مقارنة المنتج</p>
                                    </a>
                                    <a href="single-product.html" class="social-info">
                                        <span class="lnr lnr-move"></span>
                                        <p class="hover-text">رؤية المزيد</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single product -->
                    <div class="col-lg-3 col-md-6">
                        <div class="single-product">
                            <img class="img-fluid" src="img/product/p1.jpg" alt="">
                            <div class="product-details">
                                <h6>ستاند للمصحف الشريف</h6>
                                <div class="price">
                                    <h6>JD150.00</h6>
                                    <h6 class="l-through">JD210.00</h6>
                                </div>
                                <div class="prd-bottom">

                                    <a href="single-product.html" class="social-info">
                                        <span class="ti-bag"></span>
                                        <p class="hover-text">أضيف للحقيبة</p>
                                    </a>
                                    <a href="single-product.html" class="social-info">
                                        <span class="lnr lnr-heart"></span>
                                        <p class="hover-text">أضف للمفضلة</p>
                                    </a>
                                    <a href="single-product.html" class="social-info">
                                        <span class="lnr lnr-sync"></span>
                                        <p class="hover-text">مقارنة المنتج</p>
                                    </a>
                                    <a href="single-product.html" class="social-info">
                                        <span class="lnr lnr-move"></span>
                                        <p class="hover-text">رؤية المزيد</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single product -->
                    <div class="col-lg-3 col-md-6">
                        <div class="single-product">
                            <img class="img-fluid" src="img/product/p8.jpg" alt="">
                            <div class="product-details">
                                <h6>ستاند للمصحف الشريف</h6>
                                <div class="price">
                                    <h6>JD150.00</h6>
                                    <h6 class="l-through">JD210.00</h6>
                                </div>
                                <div class="prd-bottom">

                                    <a href="single-product.html" class="social-info">
                                        <span class="ti-bag"></span>
                                        <p class="hover-text">أضيف للحقيبة</p>
                                    </a>
                                    <a href="single-product.html" class="social-info">
                                        <span class="lnr lnr-heart"></span>
                                        <p class="hover-text">أضف للمفضلة</p>
                                    </a>
                                    <a href="single-product.html" class="social-info">
                                        <span class="lnr lnr-sync"></span>
                                        <p class="hover-text">مقارنة المنتج</p>
                                    </a>
                                    <a href="single-product.html" class="social-info">
                                        <span class="lnr lnr-move"></span>
                                        <p class="hover-text">رؤية المزيد</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end product Area -->



    <!-- Start brand Area -->
    <!-- <section class="brand-area section_gap">
      <div class="container">
       <div class="row">
        <a class="col single-img" href="#">
         <img class="img-fluid d-block mx-auto" src="img/brand/1.png" alt="">
        </a>
        <a class="col single-img" href="#">
         <img class="img-fluid d-block mx-auto" src="img/brand/2.png" alt="">
        </a>
        <a class="col single-img" href="#">
         <img class="img-fluid d-block mx-auto" src="img/brand/3.png" alt="">
        </a>
        <a class="col single-img" href="#">
         <img class="img-fluid d-block mx-auto" src="img/brand/4.png" alt="">
        </a>
        <a class="col single-img" href="#">
         <img class="img-fluid d-block mx-auto" src="img/brand/5.png" alt="">
        </a>
       </div>
      </div>
     </section> -->
    <!-- End brand Area -->
@endsection
