@extends('pages.layouts.master')

@section('title', 'product')

@section('content')
    <style>

    </style>
    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>تفاصيل المنتج</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index.html">الرأيسية<span class="lnr lnr-arrow-right"></span></a>
                        <a href="#">المتجر<span class="lnr lnr-arrow-right"></span></a>
                        <a href="single-product.html">تفاصيل المنتج</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->
    <!--================Single Product Area =================-->
    <div class="product_image_area">
        <div class="container">
            <div class="row s_product_inner">
                <div class="col-lg-6">
                    <div class="s_Product_carousel">

                        <div class="single-prd-item">
                            <img class="img-fluid" src="{{ url($product->image) }}" alt="">
                        </div>
                        @for ($i = 1; $i <= 5; $i++)
                            @php
                                $imageKey = 'image' . $i;
                            @endphp
                            @if ($product->$imageKey)
                                <div class="single-prd-item">
                                    <img class="img-fluid" src="{{ url($product->$imageKey) }}" alt="">
                                </div>
                            @endif
                        @endfor
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="s_product_text">
                        <h3>{{ $product->name }}</h3>
                        <h2>{{ $product->price }} $</h2>
                        <ul class="list">
                            <li><a class="active" href="{{ route('shop', $category->id) }}"><span>الفئة</span> : {{ $category->name }}</a></li>
                            <li><a href="#"><span>التوفر</span> : {{ $product->stock_quantity }}</a></li>
                        </ul>
                        <p>
                            {{ $product->description }}
                        </p>
                        <form action="{{ route('cartAdd') }}" method="POST">
                            @csrf
                            <input type="hidden" name="productId" value="{{ $product->id }}">
                            <div class="product_count">
                                <label for="quantity">الكميّة:</label>
                                <input type="number" name="quantity" id="quantity{{ $product->id }}" maxlength="12"
                                    value="1" min="1" max="{{ $product->stock_quantity }}" title="Quantity:"
                                    class="input-text qty">
                                <button
                                    onclick="var result = document.getElementById('quantity{{ $product->id }}'); var sst = result.value; if( !isNaN( sst ) && sst < {{ $product->stock_quantity }} ) result.value++;return false;"
                                    class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
                                <button
                                    onclick="var result = document.getElementById('quantity{{ $product->id }}'); var sst = result.value; if( !isNaN( sst ) && sst > 1  ) result.value--;return false;"
                                    class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
                            </div>
                            <div class="card_area d-flex align-items-center add_to_cart">
                                <button class="primary-btn" type="submit">أضف للحقيبة</button>
                                {{-- <a class="icon_btn" href="#"><i class="lnr lnr lnr-heart"></i></a> --}}
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================End Single Product Area =================-->

    <!--================Product Description Area =================-->
    <section class="product_description_area">
        <div class="container">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                        aria-selected="true">الوصف</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                        aria-controls="profile" aria-selected="false">تفاصيل المنتج</a>
                </li> --}}

                <li class="nav-item">
                    <a class="nav-link active" id="review-tab" data-toggle="tab" href="#review" role="tab"
                        aria-controls="review" aria-selected="false">المراجعات</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <p>{{ $product->longDescription }}</p>


                </div>
                {{-- <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>
                                        <h5>العرض</h5>
                                    </td>
                                    <td>
                                        <h5>128mm</h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h5>الإرتفاع</h5>
                                    </td>
                                    <td>
                                        <h5>148mm</h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h5>العمق</h5>
                                    </td>
                                    <td>
                                        <h5>85mm</h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h5>الوزن</h5>
                                    </td>
                                    <td>
                                        <h5>2020gm</h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h5>الكفالة</h5>
                                    </td>
                                    <td>
                                        <h5>مكفول عند الإستلام فقط </h5>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div> --}}

                <div class="tab-pane fade show active" id="review" role="tabpanel" aria-labelledby="review-tab">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="row total_rate">
                                @if (count($Reviews) > 0)
                                    @php
                                        $R1 = 0;
                                        $R2 = 0;
                                        $R3 = 0;
                                        $R4 = 0;
                                        $R5 = 0;
                                        foreach ($Reviews as $review) {
                                            if ($review->rating == 1) {
                                                $R1++;
                                            } elseif ($review->rating == 2) {
                                                $R2++;
                                            } elseif ($review->rating == 3) {
                                                $R3++;
                                            } elseif ($review->rating == 4) {
                                                $R4++;
                                            } elseif ($review->rating == 5) {
                                                $R5++;
                                            }
                                        }
                                        $AVG = ($R1 + $R2 * 2 + $R3 * 3 + $R4 * 4 + $R5 * 5) / count($Reviews);
                                        $roundedAVG = round($AVG, 1);
                                    @endphp
                                @endif
                                <div class="col-6">
                                    <div class="box_total">
                                        <h5>التقيم</h5>
                                        <h4>{{ isset($roundedAVG) ? $roundedAVG : '5.0' }}</h4>
                                        <h6>(<b>{{ count($Reviews) }}</b> مراجعات)</h6>
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="rating_list">
                                        <h3>بناءاً على <b>{{ count($Reviews) }}</b> من المراجعات </h3>
                                        <ul class="list">
                                            <li><a href="#">5 Star <i class="fa fa-star"></i><i
                                                        class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                        class="fa fa-star"></i><i class="fa fa-star"></i>
                                                    {{ isset($R5) ? $R5 : '0' }}</a></li>
                                            </a></li>
                                            <li><a href="#">4 Star <i class="fa fa-star"></i><i
                                                        class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                        class="fa fa-star"></i><i class="fa fa-star-o"></i>
                                                    {{ isset($R4) ? $R4 : '0' }}</a></li>
                                            <li><a href="#">3 Star <i class="fa fa-star"></i><i
                                                        class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                        class="fa fa-star-o"></i><i class="fa fa-star-o"></i>
                                                    {{ isset($R3) ? $R3 : '0' }}</a></li>
                                            <li><a href="#">2 Star <i class="fa fa-star"></i><i
                                                        class="fa fa-star"></i><i class="fa fa-star-o"></i><i
                                                        class="fa fa-star-o"></i><i class="fa fa-star-o"></i>
                                                    {{ isset($R2) ? $R2 : '0' }}</a></li>
                                            <li><a href="#">1 Star <i class="fa fa-star"></i><i
                                                        class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i
                                                        class="fa fa-star-o"></i><i class="fa fa-star-o"></i>
                                                    {{ isset($R1) ? $R1 : '0' }}</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="review_list">


                                @foreach ($Reviews as $review)
                                    <div class="review_item">
                                        <div class="media">
                                            <div class="d-flex">
                                                <img style="width: 70px; height: 70px; border-radius: 50%;"
                                                    src="{{ url($review->User->image ? $review->User->image : 'userSide/img/user.jpg') }}"
                                                    alt="image">
                                            </div>
                                            <div class="media-body">
                                                <h4>{{ $review->User->name }}</h4>
                                                @for ($i = 0; $i < 5; $i++)
                                                    @if ($review->rating > $i)
                                                        <i class="fa fa-star"></i>
                                                    @else
                                                        <i class="fa fa-star-o"></i>
                                                    @endif
                                                @endfor
                                            </div>
                                        </div>
                                        <p>{{ $review->review_text }}</p>
                                    </div>
                                @endforeach





                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="review_box">
                                <h4>أترك مراجعة</h4>
                                @if (!Auth::check())
                                    <p>قم بتسجسيل الدخول لتتمكن من كتابة مراجعة</p>
                                @elseif(!$hasBeenBought)
                                    <p>قم بشراء المنتج حتى تتمكن من التعليق</p>
                                @else
                                    <form class="contact_form" method="POST" action="{{ route('review') }}">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <div class="stars">
                                            <p>تقيمك:</p>
                                            <label><input type="radio" name="rating" value="1" required><i
                                                    class="fa fa-star-o"></i></label>
                                            <label><input type="radio" name="rating" value="2" required><i
                                                    class="fa fa-star-o"></i></label>
                                            <label><input type="radio" name="rating" value="3" required><i
                                                    class="fa fa-star-o"></i></label>
                                            <label><input type="radio" name="rating" value="4" required><i
                                                    class="fa fa-star-o"></i></label>
                                            <label><input type="radio" name="rating" value="5" required><i
                                                    class="fa fa-star-o"></i></label>
                                        </div>
                                        <p></p>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea class="form-control" name="review_text" id="message" rows="1" placeholder="المراجعة"
                                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'المراجعة'" required></textarea></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12 text-right">
                                            <button type="submit" value="submit" class="primary-btn">ارفع
                                                المراجعة</button>
                                        </div>
                                    </form>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="related-product-area mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-title">
                        <h1>منتجات مشابهة</h1>
                        <p>بعض منتجاتنا</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        @foreach ( $related as $item )                            
                        <div class="col-lg-4 col-md-4 col-sm-6 mb-20">
                            <div class="single-related-product d-flex">
                                <a href="{{route('product',$item->id)}}"><img width="100px" src="{{url($item->image)}}" alt=""></a>
                                <div class="desc">
                                    <a href="{{route('product',$item->id)}}" class="title">{{$item->name}}</a>
                                    <div class="price">
                                        <h6>{{$item->price}}$</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Product Description Area =================-->
    <script>
        const stars = document.querySelectorAll('.stars i');
        const ratingInput = document.querySelectorAll('input[name="rating"]');

        stars.forEach((star, index) => {
            star.addEventListener('click', () => {
                resetStars();

                for (let i = 0; i <= index; i++) {
                    stars[i].classList.remove('fa-star-o');
                    stars[i].classList.add('fa-star');
                    ratingInput[i].checked = true;
                }
            });
        });

        function resetStars() {
            stars.forEach(star => {
                star.classList.remove('fa-star');
                star.classList.add('fa-star-o');
            });
        }
    </script>
    <!-- Start related-product Area -->
    <!-- <section class="related-product-area section_gap_bottom">
                                                                                                                                                          <div class="container">
                                                                                                                                                           <div class="row justify-content-center">
                                                                                                                                                            <div class="col-lg-6 text-center">
                                                                                                                                                             <div class="section-title">
                                                                                                                                                              <h1>Deals of the Week</h1>
                                                                                                                                                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                                                                                                                                               magna aliqua.</p>
                                                                                                                                                             </div>
                                                                                                                                                            </div>
                                                                                                                                                           </div>
                                                                                                                                                           <div class="row">
                                                                                                                                                            <div class="col-lg-9">
                                                                                                                                                             <div class="row">
                                                                                                                                                              <div class="col-lg-4 col-md-4 col-sm-6 mb-20">
                                                                                                                                                               <div class="single-related-product d-flex">
                                                                                                                                                                <a href="#"><img src="img/r1.jpg" alt=""></a>
                                                                                                                                                                <div class="desc">
                                                                                                                                                                 <a href="#" class="title">Black lace Heels</a>
                                                                                                                                                                 <div class="price">
                                                                                                                                                                  <h6>$189.00</h6>
                                                                                                                                                                  <h6 class="l-through">$210.00</h6>
                                                                                                                                                                 </div>
                                                                                                                                                                </div>
                                                                                                                                                               </div>
                                                                                                                                                              </div>
                                                                                                                                                              <div class="col-lg-4 col-md-4 col-sm-6 mb-20">
                                                                                                                                                               <div class="single-related-product d-flex">
                                                                                                                                                                <a href="#"><img src="img/r2.jpg" alt=""></a>
                                                                                                                                                                <div class="desc">
                                                                                                                                                                 <a href="#" class="title">Black lace Heels</a>
                                                                                                                                                                 <div class="price">
                                                                                                                                                                  <h6>$189.00</h6>
                                                                                                                                                                  <h6 class="l-through">$210.00</h6>
                                                                                                                                                                 </div>
                                                                                                                                                                </div>
                                                                                                                                                               </div>
                                                                                                                                                              </div>
                                                                                                                                                              <div class="col-lg-4 col-md-4 col-sm-6 mb-20">
                                                                                                                                                               <div class="single-related-product d-flex">
                                                                                                                                                                <a href="#"><img src="img/r3.jpg" alt=""></a>
                                                                                                                                                                <div class="desc">
                                                                                                                                                                 <a href="#" class="title">Black lace Heels</a>
                                                                                                                                                                 <div class="price">
                                                                                                                                                                  <h6>$189.00</h6>
                                                                                                                                                                  <h6 class="l-through">$210.00</h6>
                                                                                                                                                                 </div>
                                                                                                                                                                </div>
                                                                                                                                                               </div>
                                                                                                                                                              </div>
                                                                                                                                                              <div class="col-lg-4 col-md-4 col-sm-6 mb-20">
                                                                                                                                                               <div class="single-related-product d-flex">
                                                                                                                                                                <a href="#"><img src="img/r5.jpg" alt=""></a>
                                                                                                                                                                <div class="desc">
                                                                                                                                                                 <a href="#" class="title">Black lace Heels</a>
                                                                                                                                                                 <div class="price">
                                                                                                                                                                  <h6>$189.00</h6>
                                                                                                                                                                  <h6 class="l-through">$210.00</h6>
                                                                                                                                                                 </div>
                                                                                                                                                                </div>
                                                                                                                                                               </div>
                                                                                                                                                              </div>
                                                                                                                                                              <div class="col-lg-4 col-md-4 col-sm-6 mb-20">
                                                                                                                                                               <div class="single-related-product d-flex">
                                                                                                                                                                <a href="#"><img src="img/r6.jpg" alt=""></a>
                                                                                                                                                                <div class="desc">
                                                                                                                                                                 <a href="#" class="title">Black lace Heels</a>
                                                                                                                                                                 <div class="price">
                                                                                                                                                                  <h6>$189.00</h6>
                                                                                                                                                                  <h6 class="l-through">$210.00</h6>
                                                                                                                                                                 </div>
                                                                                                                                                                </div>
                                                                                                                                                               </div>
                                                                                                                                                              </div>
                                                                                                                                                              <div class="col-lg-4 col-md-4 col-sm-6 mb-20">
                                                                                                                                                               <div class="single-related-product d-flex">
                                                                                                                                                                <a href="#"><img src="img/r7.jpg" alt=""></a>
                                                                                                                                                                <div class="desc">
                                                                                                                                                                 <a href="#" class="title">Black lace Heels</a>
                                                                                                                                                                 <div class="price">
                                                                                                                                                                  <h6>$189.00</h6>
                                                                                                                                                                  <h6 class="l-through">$210.00</h6>
                                                                                                                                                                 </div>
                                                                                                                                                                </div>
                                                                                                                                                               </div>
                                                                                                                                                              </div>
                                                                                                                                                              <div class="col-lg-4 col-md-4 col-sm-6">
                                                                                                                                                               <div class="single-related-product d-flex">
                                                                                                                                                                <a href="#"><img src="img/r9.jpg" alt=""></a>
                                                                                                                                                                <div class="desc">
                                                                                                                                                                 <a href="#" class="title">Black lace Heels</a>
                                                                                                                                                                 <div class="price">
                                                                                                                                                                  <h6>$189.00</h6>
                                                                                                                                                                  <h6 class="l-through">$210.00</h6>
                                                                                                                                                                 </div>
                                                                                                                                                                </div>
                                                                                                                                                               </div>
                                                                                                                                                              </div>
                                                                                                                                                              <div class="col-lg-4 col-md-4 col-sm-6">
                                                                                                                                                               <div class="single-related-product d-flex">
                                                                                                                                                                <a href="#"><img src="img/r10.jpg" alt=""></a>
                                                                                                                                                                <div class="desc">
                                                                                                                                                                 <a href="#" class="title">Black lace Heels</a>
                                                                                                                                                                 <div class="price">
                                                                                                                                                                  <h6>$189.00</h6>
                                                                                                                                                                  <h6 class="l-through">$210.00</h6>
                                                                                                                                                                 </div>
                                                                                                                                                                </div>
                                                                                                                                                               </div>
                                                                                                                                                              </div>
                                                                                                                                                              <div class="col-lg-4 col-md-4 col-sm-6">
                                                                                                                                                               <div class="single-related-product d-flex">
                                                                                                                                                                <a href="#"><img src="img/r11.jpg" alt=""></a>
                                                                                                                                                                <div class="desc">
                                                                                                                                                                 <a href="#" class="title">Black lace Heels</a>
                                                                                                                                                                 <div class="price">
                                                                                                                                                                  <h6>$189.00</h6>
                                                                                                                                                                  <h6 class="l-through">$210.00</h6>
                                                                                                                                                                 </div>
                                                                                                                                                                </div>
                                                                                                                                                               </div>
                                                                                                                                                              </div>
                                                                                                                                                             </div>
                                                                                                                                                            </div>
                                                                                                                                                            <div class="col-lg-3">
                                                                                                                                                             <div class="ctg-right">
                                                                                                                                                              <a href="#" target="_blank">
                                                                                                                                                               <img class="img-fluid d-block mx-auto" src="img/category/c5.jpg" alt="">
                                                                                                                                                              </a>
                                                                                                                                                             </div>
                                                                                                                                                            </div>
                                                                                                                                                           </div>
                                                                                                                                                          </div>
                                                                                                                                                         </section> -->
    <!-- End related-product Area -->

@endsection
