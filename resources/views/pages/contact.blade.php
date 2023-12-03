@extends('pages.layouts.master')

@section('title','Islamiyat')

@section('content')
	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>تواصل معنا</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">الرأيسية<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">تواصل</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--================Contact Area =================-->
	<section class="contact_area section_gap_bottom">
		<div class="container">
			<div id="mapBox" class="mapBox" data-lat="32.5524333" data-lon="35.8497264" data-zoom="15" data-info="Orange Digital Village Irbid."
			data-mlat="32.5524333" data-mlon="35.8497264">
			</div>
			<div class="row">
				<div class="col-lg-3">
					<div class="contact_info">
						<div class="info_item">
							<i class="lnr lnr-home"></i>
							<h6>الأردن, إربد</h6>
							<p>أكادمية أورنج للبرمجة</p>
						</div>
						<div class="info_item">
							<i class="lnr lnr-phone-handset"></i>
							<h6><a href="#">00 (962) 788 120 617</a></h6>
							<p>من السبت للخميس من ال7 صباحاً حتى ال10 ليلاً</p>
						</div>
						<div class="info_item">
							<i class="lnr lnr-envelope"></i>
							<h6><a href="#">islamyat@gmail.com</a></h6>
							<p>بإنتظار اقتراحاتكم</p>
						</div>
					</div>
				</div>
				<div class="col-lg-9">
					<form class="row contact_form" action="{{route('contactSend')}}" method="post" id="contactForm" novalidate="novalidate">
						@csrf
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" id="name" name="name" placeholder="إسمك" onfocus="this.placeholder = ''" onblur="this.placeholder = 'أدخل إسمك'">
							</div>
							<div class="form-group">
								<input type="email" class="form-control" id="email" name="email" placeholder="بريدك الإليكتروني" onfocus="this.placeholder = ''" onblur="this.placeholder = 'أدخل بريدك الإليكتروني'">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="subject" name="subject" placeholder="الموضوع" onfocus="this.placeholder = ''" onblur="this.placeholder = 'أدخيل الموضوع'">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<textarea class="form-control" name="message" id="message" rows="1" placeholder="رسالتك" onfocus="this.placeholder = ''" onblur="this.placeholder = 'أدخيل رسالتك'"></textarea>
							</div>
						</div>
						<div class="col-md-12 text-right">
							<button type="submit" value="submit" class="primary-btn">إبعث رسالة</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!--================Contact Area =================-->
@endsection