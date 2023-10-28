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
                        <a href="about.html">معلومات الطلب</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <section class="order_details section_gap">
        <div class="container">
            <h3 class="title_confirmation">شكراً لك , تم تسجيل طلبك بنجاح</h3>
            <div class="row order_d_inner">
                <div class="col-lg-6">
                    <div class="details_item">
                        <h4>معلومات الطلب</h4>
                        <ul class="list">
                            <li>
                                <p href="#"><span>رقم الطلب</span> : {{ $order->id }}</p>
                            </li>
                            <li><p href="#"><span>عدد المنتجات</span> : {{ $order->city }}</p></li>
                            <li><p href="#"><span>مجموع التكلفة</span> : USD {{ $order->total_price }}</p></li>
                            <li><p href="#"><span>وسيلة الدفع</span> : {{ $order->payment_method }}</p></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="details_item">
                        <h4>معلومات الشحن</h4>
                        <ul class="list">
                            <li><p href="#"><span>رقم الهاتف</span> : {{ $order->phone }}</p></li>
                            <li><p href="#"><span>المحافظة</span> : {{ $order->city }}</p></li>
                            <li><p href="#"><span>الحي والشارع</span> : {{ $order->street_address }}</p></li>
                            <li><p href="#"><span>رقم البريد </span> : {{ $order->post_code }}</p></li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="order_details_table">
                <h2>معلومات الدفع</h2>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <p>Pixelstore fresh Blackberry</p>
                                </td>
                                <td>
                                    <h5>x 02</h5>
                                </td>
                                <td>
                                    <p>$720.00</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Pixelstore fresh Blackberry</p>
                                </td>
                                <td>
                                    <h5>x 02</h5>
                                </td>
                                <td>
                                    <p>$720.00</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Pixelstore fresh Blackberry</p>
                                </td>
                                <td>
                                    <h5>x 02</h5>
                                </td>
                                <td>
                                    <p>$720.00</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h4>Subtotal</h4>
                                </td>
                                <td>
                                    <h5></h5>
                                </td>
                                <td>
                                    <p>$2160.00</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h4>Shipping</h4>
                                </td>
                                <td>
                                    <h5></h5>
                                </td>
                                <td>
                                    <p>Flat rate: $50.00</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h4>Total</h4>
                                </td>
                                <td>
                                    <h5></h5>
                                </td>
                                <td>
                                    <p>$2210.00</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('JS')
    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js'></script>
    <script src="{{ asset('userSide/js/about.js') }}"></script>
@endsection
