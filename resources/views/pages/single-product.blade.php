@extends('pages.layouts.master')

@section('title', 'product')

@section('content')
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
                        <h2>{{ $product->price }} JD</h2>
                        <ul class="list">
                            <li><a class="active" href="#"><span>الفئة</span> : {{ $category->name }}</a></li>
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
                                    value="1" min="1" max="{{$product->stock_quantity}}" title="Quantity:" class="input-text qty">
                                <button
                                    onclick="var result = document.getElementById('quantity{{ $product->id }}'); var sst = result.value; if( !isNaN( sst ) && sst < {{$product->stock_quantity}} ) result.value++;return false;"
                                    class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
                                <button
                                    onclick="var result = document.getElementById('quantity{{ $product->id }}'); var sst = result.value; if( !isNaN( sst ) && sst > 1  ) result.value--;return false;"
                                    class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
                            </div>
                            <div class="card_area d-flex align-items-center add_to_cart">
                                <button class="primary-btn" type="submit">أضف للحقيبة</button>
                                <a class="icon_btn" href="#"><i class="lnr lnr lnr-heart"></i></a>
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
                    <p>{{$product->longDescription}}</p>


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
                                <div class="col-6">
                                    <div class="box_total">
                                        <h5>التقيم</h5>
                                        <h4>4.0</h4>
                                        <h6>(03 مراجعات)</h6>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="rating_list">
                                        <h3>بناءاً على 3 مراجعات</h3>
                                        <ul class="list">
                                            <li><a href="#">5 Star <i class="fa fa-star"></i><i
                                                        class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                        class="fa fa-star"></i><i class="fa fa-star"></i> 06</a></li>
                                            <li><a href="#">4 Star <i class="fa fa-star"></i><i
                                                        class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                        class="fa fa-star"></i><i class="fa fa-star-o"></i> 02</a></li>
                                            <li><a href="#">3 Star <i class="fa fa-star"></i><i
                                                        class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                        class="fa fa-star-o"></i><i class="fa fa-star-o"></i> 00</a></li>
                                            <li><a href="#">2 Star <i class="fa fa-star"></i><i
                                                        class="fa fa-star"></i><i class="fa fa-star-o"></i><i
                                                        class="fa fa-star-o"></i><i class="fa fa-star-o"></i> 01</a></li>
                                            <li><a href="#">1 Star <i class="fa fa-star"></i><i
                                                        class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i
                                                        class="fa fa-star-o"></i><i class="fa fa-star-o"></i> 02</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="review_list">
                                <div class="review_item">
                                    <div class="media">
                                        <div class="d-flex">
                                            <img style="width: 70px; height: 70px; border-radius: 50%;"
                                                src="img/product/review-1.png" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h4>محمد الحواري</h4>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <p>لوحة جدارية إسلامية رائعة، تجسد التراث بأناقة. تصميم دقيق وألوان جميلة، أضفت لمسة
                                        رائعة لديكور منزلي. سعيد بها!</p>
                                </div>
                                <div class="review_item">
                                    <div class="media">
                                        <div class="d-flex">
                                            <img src="img/product/review-2.png" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h4>احمد محموود</h4>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                    <p>حلوو ماما حبتها بس ليش مكتوب عليها صنع بالصين وانا مشتريها من هون</p>
                                </div>
                                <div class="review_item">
                                    <div class="media">
                                        <div class="d-flex">
                                            <img src="img/product/review-3.png" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h4>مدمر الأحزان</h4>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                    <p>واااااه</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="review_box">
                                <h4>أترك مراجعة</h4>
                                <p>تقيمك:</p>
                                <ul class="list">
                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                </ul>

                                <p></p>


                                <form class="row contact_form" action="#" method="post" id="contactForm"
                                    novalidate="novalidate">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="name" name="name"
                                                placeholder="أضف إسمك" onfocus="this.placeholder = ''"
                                                onblur="this.placeholder = 'أضف إسمك'">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="email" name="email"
                                                placeholder="أضف بريدك ألإلكتروني" onfocus="this.placeholder = ''"
                                                onblur="this.placeholder = 'أضف بريدك ألإلكتروني'">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="number" name="number"
                                                placeholder="أضف رقم الهاتف" onfocus="this.placeholder = ''"
                                                onblur="this.placeholder = 'أضف رقم الهاتف'">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea class="form-control" name="message" id="message" rows="1" placeholder="المراجعة"
                                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'المراجعة'"></textarea></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-right">
                                        <button type="submit" value="submit" class="primary-btn">ارفع المراجعة</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Product Description Area =================-->

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
