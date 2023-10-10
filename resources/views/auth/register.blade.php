@extends('pages.layouts.master')

@section('title', 'Register')

@section('content')


    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>تسجيل لأول مرّة</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index.html">الرأيسية<span class="lnr lnr-arrow-right"></span></a>
                        <a href="category.html">تسجيل لأول مرّة</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->



    <style>
        .login_form_inner {
            padding-top: 5px;
        }

        .login_box_area .login_box_img {
            margin-right: 0px;
            margin-left: -30px;
            position: relative;
        }
    </style>


    <!--================Register Box Area =================-->
    <section class="login_box_area section_gap">
        <div class="container">
            <div class="row">

                <div class="col-lg-6">
                    <div class="login_form_inner">
                        <h3>التسجيل كمستخدم جديد</h3>
                        <form class="row login_form" action="{{ route('register') }}" method="post" id="contactForm"
                            novalidate="novalidate">
                            @csrf

                            <!-- Name -->
                            <div class="col-md-12 form-group">
                                {{-- <x-input-label for="name" :value="__('Name')" /> --}}
                                <x-text-input id="name" class="block mt-1 w-full form-control" type="text"
                                    name="name" :value="old('name')" required autofocus autocomplete="name"
                                    placeholder="إسم المستخدم" />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>

                            <div class="mt-2 col-md-12 form-group">
                                {{-- <x-input-label for="email" :value="__('Email')" /> --}}
                                <x-text-input id="email" class="block mt-1 w-full form-control" type="email"
                                    name="email" placeholder="البريد الإليكتروني" :value="old('email')" required
                                    autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>


                            <!-- Password -->
                            <div class="mt-2 col-md-12 form-group">
                                {{-- <x-input-label for="password" :value="__('Password')" /> --}}

                                <x-text-input id="password" class="block mt-1 w-full form-control" type="password"
                                    name="password" placeholder="الرقم السري" required autocomplete="new-password" />

                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>


                            <!-- Confirm Password -->
                            <div class="mt-2 col-md-12 form-group">
                                {{-- <x-input-label for="password_confirmation" :value="__('Confirm Password')" /> --}}

                                <x-text-input id="password_confirmation" class="block mt-1 w-full form-control"
                                    type="password" placeholder="تأكيد الرقم السري" name="password_confirmation" required
                                    autocomplete="new-password" />
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>


                            <div class="flex items-center justify-end mt-4">

                                <x-primary-button class="ml-2 primary-btn">
                                    {{ __('التسجيل') }}
                                </x-primary-button>
                            </div>

                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login_box_img">
                        <img class="img-fluid" src="userSide/img/login.jpg" alt="">
                        <div class="hover">
                            <h4>لديك حساب مسبق؟</h4>
                            <p>مرحبًا بك في عائلتنا! ، نود أن نرحب بك بذراعين مفتوحين إلى عالمنا. انضم إلينا لتستكشف
                                منتجاتنا وتجربة تجمع بين الجودة والتميز.</p>
                            <a class="primary-btn" href="{{ route('login') }}">تسجيل الدخول</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Register Box Area =================-->
@endsection
