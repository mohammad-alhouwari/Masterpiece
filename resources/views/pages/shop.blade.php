@extends('pages.layouts.master')

@section('title','shop')

@section('content')
	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>المتجر</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">الرئيسية<span class="lnr lnr-arrow-right"></span></a>
						<a href="#">المتجر<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">مناسبات إسلامية</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->
	<div class="container">
		<div class="row">
			<div class="col-xl-3 col-lg-4 col-md-5">
				<div class="sidebar-categories">
					<div class="head">فئة المنتج</div>
					<ul class="main-categories">
						<li class="main-nav-list"><a data-toggle="collapse" href="#fruitsVegetable" aria-expanded="false" aria-controls="fruitsVegetable"><span
								 class="lnr lnr-arrow-right"></span>كتب دينية<span class="number"> (53) </span></a>
							<ul class="collapse" id="fruitsVegetable" data-toggle="collapse" aria-expanded="false" aria-controls="fruitsVegetable">
								<li class="main-nav-list child"><a href="#">مصحف<span class="number"> (13) </span></a></li>
								<li class="main-nav-list child"><a href="#">قصص الأنبياء<span class="number"> (09) </span></a></li>
								<li class="main-nav-list child"><a href="#">كتب الحديث<span class="number"> (17) </span></a></li>
								<li class="main-nav-list child"><a href="#">كتب تعليم الأطفال<span class="number"> (01) </span></a></li>
							</ul>
						</li>

						<li class="main-nav-list"><a data-toggle="collapse" href="#meatFish" aria-expanded="false" aria-controls="meatFish"><span
								 class="lnr lnr-arrow-right"></span>ملابس شرعية<span class="number"> (53) </span></a>
							<ul class="collapse" id="meatFish" data-toggle="collapse" aria-expanded="false" aria-controls="meatFish">
								<li class="main-nav-list child"><a href="#">الرجال<span class="number"> (13) </span></a></li>
								<li class="main-nav-list child"><a href="#">النساء<span class="number"> (09) </span></a></li>
								<li class="main-nav-list child"><a href="#">الأطفال<span class="number"> (17) </span></a></li>
							</ul>
						</li>
						<li class="main-nav-list"><a data-toggle="collapse" href="#cooking" aria-expanded="false" aria-controls="cooking"><span
								 class="lnr lnr-arrow-right"></span>مناسبات إسلامية<span class="number"> (53) </span></a>
							<ul class="collapse" id="cooking" data-toggle="collapse" aria-expanded="false" aria-controls="cooking">
								<li class="main-nav-list child"><a href="#">رمضان<span class="number"> (13) </span></a></li>
								<li class="main-nav-list child"><a href="#">الحج والعمرة<span class="number"> (09) </span></a></li>
								<li class="main-nav-list child"><a href="#">رأس السنة الهجرية<span class="number"> (17) </span></a></li>
								<li class="main-nav-list child"><a href="#">المولد النبوي<span class="number"> (01) </span></a></li>
							</ul>
						</li>
						
					</ul>
					{{-- <ul class="main-categories">
						<li class="main-nav-list"><a data-toggle="collapse" href="#fruitsVegetable" aria-expanded="false" aria-controls="fruitsVegetable"><span
								 class="lnr lnr-arrow-right"></span>كتب دينية<span class="number"> (53) </span></a>
							<ul class="collapse" id="fruitsVegetable" data-toggle="collapse" aria-expanded="false" aria-controls="fruitsVegetable">
								<li class="main-nav-list child"><a href="#">مصحف<span class="number"> (13) </span></a></li>
								<li class="main-nav-list child"><a href="#">قصص الأنبياء<span class="number"> (09) </span></a></li>
								<li class="main-nav-list child"><a href="#">كتب الحديث<span class="number"> (17) </span></a></li>
								<li class="main-nav-list child"><a href="#">كتب تعليم الأطفال<span class="number"> (01) </span></a></li>
							</ul>
						</li>

						<li class="main-nav-list"><a data-toggle="collapse" href="#meatFish" aria-expanded="false" aria-controls="meatFish"><span
								 class="lnr lnr-arrow-right"></span>ملابس شرعية<span class="number"> (53) </span></a>
							<ul class="collapse" id="meatFish" data-toggle="collapse" aria-expanded="false" aria-controls="meatFish">
								<li class="main-nav-list child"><a href="#">الرجال<span class="number"> (13) </span></a></li>
								<li class="main-nav-list child"><a href="#">النساء<span class="number"> (09) </span></a></li>
								<li class="main-nav-list child"><a href="#">الأطفال<span class="number"> (17) </span></a></li>
							</ul>
						</li>
						<li class="main-nav-list"><a data-toggle="collapse" href="#cooking" aria-expanded="false" aria-controls="cooking"><span
								 class="lnr lnr-arrow-right"></span>مناسبات إسلامية<span class="number"> (53) </span></a>
							<ul class="collapse" id="cooking" data-toggle="collapse" aria-expanded="false" aria-controls="cooking">
								<li class="main-nav-list child"><a href="#">رمضان<span class="number"> (13) </span></a></li>
								<li class="main-nav-list child"><a href="#">الحج والعمرة<span class="number"> (09) </span></a></li>
								<li class="main-nav-list child"><a href="#">رأس السنة الهجرية<span class="number"> (17) </span></a></li>
								<li class="main-nav-list child"><a href="#">المولد النبوي<span class="number"> (01) </span></a></li>
							</ul>
						</li>
						
					</ul> --}}
				</div>
				<div class="sidebar-filter mt-50">
					<div class="top-filter-head">فلترة المنتجات</div>
					
					<div class="common-filter">
						<div class="head">الون</div>
						<form action="#">
							<ul>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="black" name="color"><label for="black">أسود<span> (29) </span></label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="balckleather" name="color"><label for="balckleather">احمر 
									<span> (29) </span></label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="blackred" name="color"><label for="blackred"> ذهبي
										<span> (19) </span></label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="gold" name="color"><label for="gold">ابيض<span> (19) </span></label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="spacegrey" name="color"><label for="spacegrey">رمادي<span> (19) </span></label></li>
							</ul>
						</form>
					</div>
					<div class="common-filter">
						<div class="head">السعر</div>
						<div class="price-range-area">
							<div id="price-range"></div>
							<div class="value-wrapper d-flex">
								<div class="price">من:</div>
								<span>JD</span>
								<div id="lower-value"></div>
								<div class="to">إلى</div>
								<span>JD</span>
								<div id="upper-value"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-9 col-lg-8 col-md-7">
				<!-- Start Filter Bar -->
				<div class="filter-bar d-flex flex-wrap align-items-center">
					<div class="sorting">
						<select>
							<option value="1">الترتيب</option>
							<option value="1">Default sorting</option>
							<option value="1">Default sorting</option>
						</select>
					</div>
					<div class="sorting mr-auto">
						<select>
							<option value="1">إظهار 6</option>
							<option value="1">إظهار 12</option>
							<option value="1">إظهار 12</option>
						</select>
					</div>
					<div class="pagination">
						<a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
						<a href="#" class="active">1</a>
						<a href="#">2</a>
						<a href="#">3</a>
						<a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
						<a href="#">6</a>
						<a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
					</div>
				</div>
				<!-- End Filter Bar -->
				<!-- Start Best Seller -->
				<section class="lattest-product-area pb-40 category-list">
					<div class="row">




























						<!--foreach single product -->
						@foreach ($products as $product)
						@if ($product->stock_quantity > 0)						
						<div class="col-lg-4 col-md-6">
							<div class="single-product">
								<img class="img-fluid" src="{{ url($product->image) }}" alt="{{ $product->name }}.image">
								<div class="product-details">
										<h6>{{ $product->name }}</h6>
									<div class="price">
										<h6>JD{{ $product->price }}</h6>
										{{-- <h6 class="l-through">JD210.00</h6> --}}
									</div>
									<div class="prd-bottom">

										<a href="single-product.html" class="social-info">
											<span class="ti-bag"></span>
											<p class="hover-text">أضيف للحقيبة</p>
										</a>
										<a href="single-product.html" class="social-info">
											<span class="lnr lnr-heart"></span>
											<p class="hover-text">أضف للمفضلة</p>
										</a>
										{{-- <a href="single-product.html" class="social-info">
											<span class="lnr lnr-sync"></span>
											<p class="hover-text">مقارنة المنتج</p>
										</a> --}}
										<a href="{{route('product',$product->id)}}" class="social-info">
											<span class="lnr lnr-move"></span>
											<p class="hover-text">رؤية المزيد</p>
										</a>
									</div>
								</div>
							</div>
						</div>
						@endif
						@endforeach





















					</div>
				</section>
				<!-- End Best Seller -->
				<!-- Start Filter Bar -->
				<div class="filter-bar d-flex flex-wrap align-items-center">
					<div class="sorting mr-auto">
						<select>
							<option value="1">إظهار 10</option>
							<option value="1">إظهار 25</option>
							<option value="1">إظهار 50</option>
						</select>
					</div>
					<div class="pagination">
						<a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
						<a href="#" class="active">1</a>
						<a href="#">2</a>
						<a href="#">3</a>
						<a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
						<a href="#">6</a>
						<a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
					</div>
				</div>
				<!-- End Filter Bar -->
			</div>
		</div>
	</div>

	<!-- Start related-product Area -->
	<!-- <section class="related-product-area section_gap">
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
										<h6>JD189.00</h6>
										<h6 class="l-through">JD210.00</h6>
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
										<h6>JD189.00</h6>
										<h6 class="l-through">JD210.00</h6>
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
										<h6>JD189.00</h6>
										<h6 class="l-through">JD210.00</h6>
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
										<h6>JD189.00</h6>
										<h6 class="l-through">JD210.00</h6>
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
										<h6>JD189.00</h6>
										<h6 class="l-through">JD210.00</h6>
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
										<h6>JD189.00</h6>
										<h6 class="l-through">JD210.00</h6>
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
										<h6>JD189.00</h6>
										<h6 class="l-through">JD210.00</h6>
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
										<h6>JD189.00</h6>
										<h6 class="l-through">JD210.00</h6>
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
										<h6>JD189.00</h6>
										<h6 class="l-through">JD210.00</h6>
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
	<br>
@endsection