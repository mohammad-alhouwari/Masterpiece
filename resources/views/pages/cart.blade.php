@extends('pages.layouts.master')

@section('title', 'Islamiyat')

@section('content')
    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>الحقيبة</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index.html">الرأيسية<span class="lnr lnr-arrow-right"></span></a>
                        <a href="category.html">الحقيبة</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Cart Area =================-->
    <section class="cart_area">
        <div class="container">
            <div class="cart_inner">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">المنتجات</th>
                                <th scope="col">السعر</th>
                                <th scope="col">الكمية</th>
                                <th scope="col">المجموع</th>
                            </tr>
                        </thead>
                        <tbody>
                    
                            @if (session('cart') || $cart)

                                @foreach (($cart) ? $cart :session('cart') as $details)
                                    <tr>
                                        <td>
                                            <div class="media">
                                                <div class="d-flex">
                                                    <img width="150px" src="{{ url(($cart) ? $details->Product->image :$details['image']) }}" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <p>{{ $details['name'] }}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h5>
                                                ${{ ($cart) ? $details->Product->price :$details['price'] }}
                                            </h5>
                                        </td>
                                        <td>
                                            <div class="product_count">
                                                <input type="text" name="qty" id="quantity{{ ($cart) ? $details->Product->id :$details['id'] }}"
                                                    maxlength="12"
                                                    onchange="updateTotal({{ ($cart) ? $details->Product->id :$details['id'] }}, {{ ($cart) ? $details->Product->price :$details['price'] }})"
                                                    value="{{ $details['quantity'] }}" title="Quantity:"
                                                    class="input-text qty">
                                                <button
                                                    onclick="incrementQuantity('quantity{{ ($cart) ? $details->Product->id :$details['id'] }}', {{ ($cart) ? $details->Product->price :$details['price'] }})"
                                                    class="increase items-count" type="button">
                                                    <i class="lnr lnr-chevron-up"></i>
                                                </button>
                                                <button
                                                    onclick="decrementQuantity('quantity{{ ($cart) ? $details->Product->id :$details['id'] }}', {{ ($cart) ? $details->Product->price :$details['price'] }})"
                                                    class="reduced items-count" type="button">
                                                    <i class="lnr lnr-chevron-down"></i>
                                                </button>
                                            </div>
                                        </td>
                                        <td>
                                            @php
                                                $ItemTotal = ($cart) ? $details->Product->price :$details['price'] * $details['quantity'];
                                            @endphp
                                            <h5>$<span id="total{{ ($cart) ? $details->Product->id :$details['id'] }}">{{ $ItemTotal }}</span></h5>
                                        </td>
                                    </tr>
                                @endforeach

                                <script>
                                    function updateTotal(id, price) {
                                        var quantity = document.getElementById('quantity' + id).value;
                                        var totalElement = document.getElementById('total' + id);
                                        var total = price * quantity;
                                        totalElement.textContent = total;
                                    }

                                    function incrementQuantity(inputId, price) {
                                        var result = document.getElementById(inputId);
                                        var quantity = parseInt(result.value, 10);
                                        if (!isNaN(quantity)) {
                                            result.value = quantity + 1;
                                            var id = inputId.substring(8);
                                            updateTotal(id, price);
                                        }
                                    }

                                    function decrementQuantity(inputId, price) {
                                        var result = document.getElementById(inputId);
                                        var quantity = parseInt(result.value, 10);
                                        if (!isNaN(quantity) && quantity > 0) {
                                            result.value = quantity - 1;
                                            var id = inputId.substring(8);
                                            updateTotal(id, price);
                                        }
                                    }
                                </script>

                            @endif
                            <tr class="bottom_button">
                                <td>
                                    <a class="gray_btn" href="#">اعادة تحميل الحقيبة</a>
                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>
                                    <div class="cupon_text d-flex align-items-center">
                                        <input type="text" placeholder="كود الكوبون">
                                        <a class="primary-btn" href="#">تطبيق</a>
                                        <a class="gray_btn" href="#">الغاء الكوبون</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5>عدد المنتجات</h5>
                                </td>
                                @php
                                    $cartt = ($cart) ? $details->Product->price :session('cart');
                                @endphp
                                @if (is_array($cartt) && count($cartt) > 0)
                                    <td>منتج {{ count($cartt) }}</td>
                                @else
                                    <td>منتج 0</ف>
                                @endif
                                <td>
                                </td>
                                <td>
                                    <h5>المجموع الأولي</h5>
                                </td>
                                <td>
                                     {{-- @php $total = 0; @endphp
                                @foreach (($cart) ? $cart :session('cart') as $details)
                                        @php  $total += ($cart) ? $details->Product->price :$details['price'] * $details['quantity'] @endphp
                                    @endforeach

                                    <h5>{{ $total }}</h5> --}}
                                </td>
                            </tr>
                            <tr class="out_button_area">
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>
                                    <div class="checkout_btn_inner d-flex align-items-center">
                                        <a class="gray_btn" href="category.html">تابع التبضع</a>
                                        <a class="primary-btn" href="checkout.html">إكمال عملية الشراء</a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!--================End Cart Area =================-->



@endsection
