@extends('pages.layouts.master')

@section('title','Login')

@section('content')
	<!--================Login Box Area =================-->
	<section class="login_box_area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img">
						<img class="img-fluid" src="img/login.jpg" alt="">
						<div class="hover">
							<h4>مستخدم جديد؟</h4>
							<p>مرحبًا بك في عائلتنا! ، نود أن نرحب بك بذراعين مفتوحين إلى عالمنا. انضم إلينا لتستكشف منتجاتنا وتجربة تجمع بين الجودة والتميز.</p>
							<a class="primary-btn" href="registration.html">التسجيل كمستخد جديد</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner">
						<h3>سجل دخولك</h3>
						<form class="row login_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="name" placeholder="البريد الإليكتروني" onfocus="this.placeholder = ''" onblur="this.placeholder = 'البريد الإليكتروني'">
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="name" placeholder="الرقم السري" onfocus="this.placeholder = ''" onblur="this.placeholder = 'الرقم السري'">
							</div>
							<div class="col-md-12 form-group">
								<div class="creat_account">
									<input type="checkbox" id="f-option2" name="selector">
									<label for="f-option2">البقاء متصلا</label>
								</div>
							</div>
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" class="primary-btn">دخول</button>
								<a href="#">نسيت كلمة السر؟</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->
@endsection
