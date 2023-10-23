<!-- start footer Area -->
<footer class="footer-area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-4  col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>من نحن</h6>
                    <p>
                        نحن رفقاء في رحلتك نحو التقوى والتأمل. متجرنا الإسلامي مكان يجمع بين العلم والإيمان، نقدم منتجات
                        تمنح قيمًا وتلهم حياةً متراثيةً معاصرة.
                    </p>
                </div>
            </div>
            <div class="col-lg-4  col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>رسائل الايميل</h6>
                    <p>اشترك لتصلك احدث العروض</p>
                    <div class="" id="mc_embed_signup">

                        <form target="_blank" novalidate="true"
                            action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                            method="get" class="form-inline">

                            <div class="d-flex flex-row">

                                <input class="form-control" name="EMAIL" placeholder="أدخل بريدك الإليكتروني"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'أدخل بريدك الإليكتروني'"
                                    required="" type="email">


                                <button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right"
                                        aria-hidden="true"></i></button>
                                <div style="position: absolute; left: -5000px;">
                                    <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value=""
                                        type="text">
                                </div>

                            </div>
                            <div class="info"></div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12 col-sm-12 row justify-content-center">
                <div class="single-footer-widget ">
                    <h6>تابعنا</h6>
                    <p>دعنا نتواصل </p>
                    <div class="footer-social d-flex align-items-center">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-snapchat"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
            <p class="footer-text m-0">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                حقوق النشر &copy;
                <script>
                    document.write(new Date().getFullYear());
                </script> جميع الحقوق محفوظة | هذا الموقع مملوك <i class="fa fa-heart-o"
                    aria-hidden="true"></i> لـ<a href="https://colorlib.com" target="_blank">محمد الحواري</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
        </div>
    </div>
</footer>
<!-- End footer Area -->

<script src="{{ asset('userSide/js/vendor/jquery-2.2.4.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
    integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous">
</script>
<script src="{{ asset('userSide/js/vendor/bootstrap.min.js') }}"></script>
<script src="{{ asset('userSide/js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('userSide/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('userSide/js/jquery.sticky.js') }}"></script>
<script src="{{ asset('userSide/js/nouislider.min.js') }}"></script>
<script src="{{ asset('userSide/js/countdown.js') }}"></script>
<script src="{{ asset('userSide/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('userSide/js/owl.carousel.min.js') }}"></script>
<!--gmaps Js-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
<script src="{{ asset('userSide/js/gmaps.min.js') }}"></script>
<script src="{{ asset('userSide/js/main.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@yield('JS')


@if (session('success'))
    <script>
        window.addEventListener('DOMContentLoaded', (event) => {
            Swal.fire(
                'الحمد لله',
                '{{ session('success') }}',
                'success'
            );
        });
    </script>
@endif
@if (session('error'))
    <script>
        window.addEventListener('DOMContentLoaded', (event) => {
            Swal.fire(
                'معاكسة',
                '{{ session('error') }}',
                'error'
            );
        });
    </script>
@endif

{{-- <script src="{{ asset('userSide/js/cart/customCart.js') }}"></script> --}}
{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}


</body>

</html>
