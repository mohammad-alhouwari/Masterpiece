@extends('pages.layouts.master')

@section('title', 'cart')

@section('content')
    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>الدفع والمحاسبة</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index.html">الرأيسية<span class="lnr lnr-arrow-right"></span></a>
                        <a href="single-product.html">الدفع والمحاسبة</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Checkout Area =================-->
    <form action="{{ route('pay') }}" method="POST">
        @csrf
        <section class="checkout_area section_gap">
            <div class="container">
                {{-- <div class="returning_customer">
                <div class="check_title">
                    <h2>زبون سابق ? <a href="login.html">إضغط هنا لتسجيل الدخول</a></h2>
                </div>
                <p>إذا كنت قد قمت بالتسوق معنا من قبل، يرجى إدخال التفاصيل الخاصة بك في المربعات أدناه.</p>
                <form class="row contact_form" action="#" method="post" novalidate="novalidate">
                    <div class="col-md-6 form-group p_star">
                        <input placeholder="البريد ألإلكتروني" type="text" class="form-control" id="name"
                            name="name">
                        <!-- <span class="placeholder" data-placeholder="Username or Email"></span> -->
                    </div>
                    <div class="col-md-6 form-group p_star">
                        <input placeholder="كلمة السر" type="password" class="form-control" id="password" name="password">
                        <!-- <span class="placeholder" data-placeholder="كلمة السر"></span> -->
                    </div>
                    <div class="col-md-12 form-group">
                        <button type="submit" value="submit" class="primary-btn">تسجيل الدخول</button>
                        <div class="creat_account">
                            <input type="checkbox" id="f-option" name="selector">
                            <label for="f-option">تذكرني</label>
                        </div>
                        <a class="lost_pass" href="#">نسيت كلمة السر؟</a>
                    </div>
                </form>
            </div> --}}
                {{-- <div class="cupon_area">
                <div class="check_title">
                    <h2>لديك كوبون خصومات؟
                    </h2>
                </div>
                <input type="text" placeholder="إستخدم كوبون الخصم">
                <a class="tp_btn" href="#">فعل الكوبون</a>
            </div> --}}
                <div class="billing_details">
                    <div class="row">

                        <div class="col-lg-8">
                            <h3>معلومات الدفع</h3>
                            {{-- <form class="row contact_form" action="#" method="post" novalidate="novalidate"> --}}

                            <div class="col-md-12 form-group p_star">
                                <input type="number" class="form-control" id="phone" name="phone" required
                                    placeholder="رقم الهاتف">
                                {{-- <span class="placeholder" data-placeholder="رقم الهاتف"></span> --}}
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <select class="w-100 country_select" name="city" required>
                                    <option value="0" disabled selected>--- إختر المحافظة ---</option>
                                    <option value="إربد">إربد</option>
                                    <option value="عمان">عمان</option>
                                    <option value="الزرقاء">الزرقاء</option>
                                    <option value="البلقاء">البلقاء</option>
                                    <option value="مادبا">مادبا</option>
                                    <option value="الكرك">الكرك</option>
                                    <option value="الطفيلة">الطفيلة</option>
                                    <option value="معان">معان</option>
                                    <option value="العقبة">العقبة</option>
                                    <option value="جرش">جرش</option>
                                    <option value="عجلون">عجلون</option>
                                    <option value="المفرق">المفرق</option>
                                </select>

                            </div>

                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="address" name="street_address"
                                    placeholder="عنوان الحي" required>
                                {{-- <span class="placeholder" data-placeholder="عنوان الحي"></span> --}}
                            </div>

                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="zip" name="post_code"
                                    placeholder="رمز البريد" required>
                            </div>
                            <div class="col-md-12 form-group">
                                <div class="creat_account">
                                    <input type="checkbox" id="f-option2" name="selectorInfo">
                                    <label for="f-option2">إستخدم معلومات <b>الحساب</b> الحالية؟</label>
                                </div>
                            </div>
                            <br>
                            <div class="col-md-12 form-group">
                                <div class="creat_account">
                                    <h3>معلومات إضافية</h3>
                                    <textarea rows="5" class="form-control" name="note" id="note" rows="1" placeholder="ملاحظات الطلب"></textarea>
                                </div>
                            </div>
                            {{-- </form> --}}
                        </div>
                        <div class="col-lg-4">
                            <div class="order_box">
                                <h2>طلبك</h2>
                                <ul class="list">
                                    <li><a href="#">المنتجات <span>المجموع</span></a></li>
                                    @php
                                        $total = 0;
                                    @endphp
                                    @foreach ($cart as $details)
                                        <li><a href="#">{{ $details->Product->name }}<span class="middle">x
                                                    {{ $details->quantity }}</span> <span class="last">$
                                                    {{ $details->Product->price * $details->quantity }}</span></a></li>
                                        @php
                                            $total += $details->Product->price * $details->quantity;
                                        @endphp
                                    @endforeach

                                    {{-- <li><a href="#">مبخرة ذهبية<span class="middle">x 02</span> <span class="last">JD
                                            10.00</span></a></li>
                                <li><a href="#">لوحة جدارية<span class="middle">x 01</span> <span class="last">JD
                                            30.00</span></a></li> --}}
                                </ul>
                                <ul class="list list_2">
                                    <li><a href="#">المجموع الأولي <span>${{ $total }}</span></a></li>
                                    <li><a href="#">الشحن <span>: JD 2.00</span></a></li>
                                    <li><a href="#">المجموع <span>JD 67.00</span></a></li>
                                </ul>
                                <div class="payment_item">
                                    <div class="radion_btn">
                                        <input type="radio" id="f-option5" value="Cash" name="payment_method" required>
                                        <label for="f-option5">الدفع النقدي</label>
                                        <div class="check"></div>
                                    </div>
                                    <p>الدفع عند الإستلام.</p>
                                </div>
                                <div class="payment_item active">
                                    <div class="radion_btn">
                                        <input type="radio" id="f-option6" value="PayPal" name="payment_method" required>
                                        <label for="f-option6">باي بال </label>
                                        <img src="img/product/card.jpg" alt="">
                                        <div class="check"></div>
                                    </div>
                                    <p>الدفع عن طريق حساب الباي بال
                                        أو عن طريق البطاقة الإتمانية.</p>
                                </div>
                                {{-- <div class="creat_account">
                                <input type="checkbox" id="f-option4" name="selector">
                                <a href="#"> الشروط و الأحكام*</a>
                                <label for="f-option4">قرأت و وافقت على </label>
                            </div> --}}
                                <button type="submit" class="primary-btn w-100" href="#">متابعة الدفع</button>

                            </div>
                        </div>
    </form>
    </div>
    </div>
    </div>
    </section>
    </form>
    <!--================End Checkout Area =================-->
@endsection
