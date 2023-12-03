@extends('pages.layouts.master')

@section('title', 'shop')

@section('content')
    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>المتجر</h1>
                    <nav class="d-flex align-items-center">
                        <a href="javascript:;">الرئيسية<span class="lnr lnr-arrow-right"></span></a>
                        <a href="javascript:;">المتجر<span class="lnr lnr-arrow-right"></span></a>
                        <a href="javascript:;">{{ isset($category->name) ? $category->name : 'جميع الفئات' }}</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->




    <div class="container">
        <form action="" method="GET">
            <input type="hidden" name="category_id" value="{{ isset($category->id) ? $category->id : null }}">
            @csrf
            <div class="row mb-5">
                <div class="col-xl-3 col-lg-4 col-md-5">
                    <div class="sidebar-categories">
                        <div class="head">فئة المنتج</div>
                        <ul class="main-categories">
                            <li class="main-nav-list"><a href="{{ route('shop') }}"><span
                                        class="lnr lnr-arrow-right"></span>كل الفئات</a></li>
                            @foreach ($navCategories as $item)
                                <li class="main-nav-list"><a href="{{ route('shop', $item->id) }}"><span
                                            class="lnr lnr-arrow-right"></span>{{ $item->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="sidebar-filter ">
                        <div class="top-filter-head">فلترة المنتجات</div>


                        <div class="common-filter">
                            <div class="head">السعر</div>
                            <div class="price-range-area">
                                <div id="price-range"></div>
                                <div class="value-wrapper">
                                    <div class="price"></div>
                                    <span class="main-text">$</span>
                                    <input id="lower-value" type="text" class="d-inline" style="width: 90%"
                                        name="lowerValueFilter" value="">
                                    <div class="to">-</div>
                                    <span class="main-text">$</span>
                                    <input id="upper-value" type="text" class="d-inline" style="width: 90%"
                                        name="upperValueFilter" value="">
                                </div>
                                <div class="text-center mt-4">
                                    <button class="px-3 w-50 genric-btn primary">نفذ</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8 col-md-7">
                    <!-- Start Filter Bar -->
                    <div class="filter-bar d-flex flex-wrap align-items-center">
                        <div class="sorting">
                            <select name="sort" onchange="this.form.submit()" id="sortSelect">
                                @if ($sort == null)
                                    <option value="0">الترتيب</option>
                                @endif
                                <option {{ $sort == 'az' ? 'selected' : '' }} value="az">من(أ) لل(ي)</option>
                                <option {{ $sort == 'za' ? 'selected' : '' }} value="za">من(ي) لل(أ)</option>
                                <option {{ $sort == 'high_price' ? 'selected' : '' }} value="high_price">الأغلى أولاً
                                </option>
                                <option {{ $sort == 'low_price' ? 'selected' : '' }} value="low_price">الأرخص أولاً</option>
                                <option {{ $sort == 'newest' ? 'selected' : '' }} value="newest">الأحدث أولاً</option>
                                <option {{ $sort == 'oldest' ? 'selected' : '' }} value="oldest">الأقدم أولاً</option>
                            </select>
                        </div>
                        <div class="sorting mr-auto">
                            <select name="perPage" onchange="this.form.submit()">
                                <option {{ $perPage == 6 ? 'selected' : '' }} value="6">إظهار 6</option>
                                <option {{ $perPage == 9 ? 'selected' : '' }} value="9">إظهار 9</option>
                                <option {{ $perPage == 12 ? 'selected' : '' }} value="12">إظهار 12</option>
                            </select>
                        </div>
                        <div class="pagination">
                            <input name="search" type="text" class="text-center py-1" placeholder="البحث عن منتج ؟">
                            <button class="px-3 pt-1 genric-btn primary"><span class="lnr lnr-magnifier"></span></button>
                        </div>
                    </div>
                    <!-- End Filter Bar -->
                    <!-- Start Best Seller -->
                    <section class="lattest-product-area pb-40 category-list">
                        <div class="row">

                            <!--foreach single product -->
                            @if ($products[0])
                                @foreach ($products as $product)
                                    @if ($product->stock_quantity > 0)
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-product">
                                                <img class="img-fluid" src="{{ url($product->image) }}"
                                                    alt="{{ $product->name }}.image">
                                                <div class="product-details">
                                                    <h6>{{ $product->name }}</h6>
                                                    <div class="price">
                                                        <h6>JD{{ $product->price }}</h6>
                                                    </div>
                                                    <div class="prd-bottom">

                                                        <a href="single-product.html" class="social-info">
                                                            <span class="ti-bag"></span>
                                                            <p class="hover-text">أضيف للحقيبة</p>
                                                        </a>
                                                        {{-- <a href="single-product.html" class="social-info">
                                                        <span class="lnr lnr-heart"></span>
                                                        <p class="hover-text">أضف للمفضلة</p>
                                                    </a> --}}
                                                        <a href="{{ route('product', $product->id) }}" class="social-info">
                                                            <span class="lnr lnr-move"></span>
                                                            <p class="hover-text">رؤية المزيد</p>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            @else
                                <div class="text-center w-100 my-5 py-5">
                                    <p class="h4">للأسف لا يوجد منتجات</p>
                                </div>
                            @endif

                        </div>
                    </section>
                    <!-- End Best Seller -->
                    <!-- Start Filter Bar -->
                    <div class="filter-bar d-flex flex-wrap align-items-center">
                        {{$products->links()}}

                        {{-- <div class="pagination mx-auto">
                            <a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left"
                                    aria-hidden="true"></i></a>
                            <a href="#" class="active">1</a>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                            <a href="#">6</a>
                            <a href="#" class="next-arrow"><i class="fa fa-long-arrow-right"
                                    aria-hidden="true"></i></a>
                        </div> --}}
                    </div>
                    <!-- End Filter Bar -->
                </div>
            </div>
        </form>
    </div>
    <!-- End related-product Area -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(function() {
            if (document.getElementById("price-range")) {

                var nonLinearSlider = document.getElementById('price-range');
                var lowerValueInput = document.getElementById('lower-value');
                var upperValueInput = document.getElementById('upper-value');

                noUiSlider.create(nonLinearSlider, {
                    connect: true,
                    behaviour: 'tap',
                    start: [{{ $minPrice ? $minPrice : 1 }}, {{ $maxPrice ? $maxPrice : 1000 }}],
                    range: {
                        'min': [0, 1],
                        '20%': [100, 10],
                        '80%': [500, 100],
                        'max': [1000]
                    }
                });

                // Display the slider value and set the input field value
                nonLinearSlider.noUiSlider.on('update', function(values, handle, unencoded, isTap, positions) {
                    if (handle === 0) {
                        lowerValueInput.value = values[handle];
                    } else {
                        upperValueInput.value = values[handle];
                    }
                });

                // Update the slider when the input field values change
                lowerValueInput.addEventListener('change', function() {
                    nonLinearSlider.noUiSlider.set([this.value, null]);
                });

                upperValueInput.addEventListener('change', function() {
                    nonLinearSlider.noUiSlider.set([null, this.value]);
                });
            }
        });
    </script>
@endsection
