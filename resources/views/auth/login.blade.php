@extends('pages.layouts.master')

@section('title', 'Login')

@section('content')
    	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>تسجيل الدخول</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">الرأيسية<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">تسجيل الدخول</a>
					</nav>
				</div>
			</div>
		</div>
	</section>





    <section class="login_box_area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login_box_img">
                        <img class="img-fluid" src="userSide/img/login.jpg" alt="">
                        <div class="hover">
                            <h4>مستخدم جديد؟</h4>
                            <p>مرحبًا بك في عائلتنا! ، نود أن نرحب بك بذراعين مفتوحين إلى عالمنا. انضم إلينا لتستكشف
                                منتجاتنا وتجربة تجمع بين الجودة والتميز.</p>
                            <a class="primary-btn" href="{{Route('register')}}">التسجيل كمستخد جديد</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login_form_inner">
                        <h3>سجل دخولك</h3>
                        <form class="row login_form" action="{{ route('login') }}" method="post" id="contactForm"
                            novalidate="novalidate">
                                @csrf






                                <div class="col-md-12 form-group">
                                    {{-- <x-input-label for="email" :value="__('Email')" /> --}}
                                    <x-text-input id="email" class="block mt-1 w-full form-control" type="email"
                                        name="email" placeholder="البريد الإليكتروني" :value="old('email')" required autofocus
                                        autocomplete="username" />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>



                                <div class="mt-4 col-md-12 form-group">
                                    {{-- <x-input-label for="password" :value="__('Password')" /> --}}
                                    <x-text-input id="password" class="block mt-1 w-full form-control" type="password" name="password"
                                        placeholder="الرقم السري" required autocomplete="current-password" />

                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>



                                <div class="block mt-4 col-md-12 form-group">
                                    <label for="remember_me" class="inline-flex items-center creat_account">
                                        <input id="remember_me" type="checkbox"
                                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                            name="remember">
                                        <span class="ml-2 text-sm text-gray-600">{{ __('البقاء متصلا') }}</span>
                                    </label>
                                </div>



                                <div class="flex items-center justify-end mt-4">
                                    @if (Route::has('password.request'))
                                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                            href="{{ route('password.request') }}">
                                            {{ __('نسيت كلمة السر؟') }}
                                        </a>
                                    @endif

                                    <x-primary-button class="ml-3 primary-btn">
                                        {{ __('تسجيل الدخول') }}
                                    </x-primary-button>
                                </div>




                            </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form> --}}
@endsection





{{-- login --}}



<!--================Login Box Area =================-->



<!--================End Login Box Area =================-->
