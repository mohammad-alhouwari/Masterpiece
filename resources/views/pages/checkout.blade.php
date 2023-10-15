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
    <section class="checkout_area section_gap">
        <div class="container">
            <div class="returning_customer">
                <div class="check_title">
                    <h2>زبون سابق ? <a href="login.html">إضغط هنا لتسجيل الدخول</a></h2>
                </div>
                <p>إذا كنت قد قمت بالتسوق معنا من قبل، يرجى إدخال التفاصيل الخاصة بك في المربعات أدناه.</p>
                <form class="row contact_form" action="#" method="post" novalidate="novalidate">
                    <div class="col-md-6 form-group p_star">
                        <input placeholder="البريد ألإلكتروني" type="text" class="form-control" id="name" name="name">
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
            </div>
            <div class="cupon_area">
                <div class="check_title">
                    <h2>لديك كوبون خصومات؟ 
        
                    </h2>
                </div>
                <input type="text" placeholder="إستخدم كوبون الخصم">
                <a class="tp_btn" href="#">فعل الكوبون</a>
            </div>
            <div class="billing_details">
                <div class="row">
                    <div class="col-lg-8">
                        <h3>معلومات الدفع</h3>
                        <form class="row contact_form" action="#" method="post" novalidate="novalidate">
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="name" name="name">
                                <span class="placeholder" data-placeholder="أدخل إسمك"></span>
                            </div>
                            
                            <div class="col-md-6 form-group p_star">
                                <input type="number" class="form-control" id="phone" name="phone">
                                <span class="placeholder" data-placeholder="رقم الهاتف"></span>
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="email" name="email">
                                <span class="placeholder" data-placeholder="البريد ألإلكتروني"></span>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <select class="country_select">
                                    <option value="0">--- إختر المحافظة ---</option>
                                    <option value="1">إربد</option>
                                    <option value="2">عمان</option>
                                    <option value="3">الزرقاء</option>
                                </select>
                            </div>

                            <div class="col-md-12 form-group p_star ">
                                <input type="text" class="form-control" id="city" name="city">
                                <span class="placeholder" data-placeholder="اللواء"></span>
                            </div>

                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="address" name="adress">
                                <span class="placeholder" data-placeholder="العنوان"></span>
                            </div>
                           
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="zip" name="zip" placeholder="رمز البريد">
                            </div>
                            <div class="col-md-12 form-group">
                                <div class="creat_account">
                                    <input type="checkbox" id="f-option2" name="selector">
                                    <label for="f-option2">إصنع حساب ؟</label>
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <div class="creat_account">
                                    <h3>معلومات الشحن</h3>
                                    <input type="checkbox" id="f-option3" name="selector">
                                    <label for="f-option3">التوصيل لمكان أخر</label>
                                </div>
                                <textarea class="form-control" name="message" id="message" rows="1" placeholder="ملاحظات الطلب"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-4">
                        <div class="order_box">
                            <h2>طلبك</h2>
                            <ul class="list">
                                <li><a href="#">المنتجات <span>المجموع</span></a></li>
                                <li><a href="#">القرأن الكريم <span class="middle">x 01</span> <span class="last">JD 15.00</span></a></li>
                                <li><a href="#">مبخرة ذهبية<span class="middle">x 02</span> <span class="last">JD 10.00</span></a></li>
                                <li><a href="#">لوحة جدارية<span class="middle">x 01</span> <span class="last">JD 30.00</span></a></li>
                            </ul>
                            <ul class="list list_2">
                                <li><a href="#">المجموع الأولي <span>JD 65.00</span></a></li>
                                <li><a href="#">الشحن <span>: JD 2.00</span></a></li>
                                <li><a href="#">المجموع <span>JD 67.00</span></a></li>
                            </ul>
                            <div class="payment_item">
                                <div class="radion_btn">
                                    <input type="radio" id="f-option5" name="selector">
                                    <label for="f-option5">الدفع النقدي</label>
                                    <div class="check"></div>
                                </div>
                                <p>الدفع عند الإستلام.</p>
                            </div>
                            <div class="payment_item active">
                                <div class="radion_btn">
                                    <input type="radio" id="f-option6" name="selector">
                                    <label for="f-option6">باي بال </label>
                                    <img src="img/product/card.jpg" alt="">
                                    <div class="check"></div>
                                </div>
                                <p>الدفع عن طريق حساب الباي بال 
                                    أو عن طريق البطاقة الإتمانية.</p>
                            </div>
                            <div class="creat_account">
                                <input type="checkbox" id="f-option4" name="selector"> 
                                <a href="#">  الشروط و الأحكام*</a>
                                <label for="f-option4">قرأت و وافقت على </label>
                            </div>
                            <a class="primary-btn" href="#">متابعة الدفع</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Checkout Area =================-->
@endsection