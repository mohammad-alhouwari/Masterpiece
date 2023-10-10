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
                            <tr>
                                <td>
                                    <div class="media">
                                        <div class="d-flex">
                                            <img width="150px" src="img/cart.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <p></p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h5>
                                        666
                                    </h5>
                                </td>
                                <td>
                                    <div class="product_count">
                                        <input type="text" name="qty" id="sst" maxlength="12" value="1"
                                            title="Quantity:" class="input-text qty">
                                        <button
                                            onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
                                            class="increase items-count" type="button"><i
                                                class="lnr lnr-chevron-up"></i></button>
                                        <button
                                            onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
                                            class="reduced items-count" type="button"><i
                                                class="lnr lnr-chevron-down"></i></button>
                                    </div>
                                </td>
                                <td>
                                    <h5>JD30.00</h5>
                                </td>
                            </tr>








                            {{-- <tr>
                                <td>{{ $item->Product->name }}</td>
                                <td>${{ $item->Product->price }}</td>
                                <td>
                                    <div class="quantity-control">
                                        <button class="btn btn-sm btn-secondary decrease-quantity"
                                            data-product-id="{{ $item->product_id }}">-</button>
                                        <span class="quantity">{{ $item->quantity }}</span>
                                        <button class="btn btn-sm btn-secondary increase-quantity"
                                            data-product-id="{{ $item->product_id }}">+</button>
                                    </div>
                                </td>
                                <td>${{ $item->Product->price * $item->quantity }}</td>
                                <td>
                                    <button class="btn btn-danger remove-from-cart-btn"
                                        data-product-id="{{ $item->product_id }}">Remove</button>
                                </td>
                            </tr> --}}


                       

                            <div class="container">
                                <h1>Your Cart</h1>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Product Name</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Subtotal</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($cartItems as $cartItem)
                                            <tr>
                                                <td>{{ $cartItem->Product->name }}</td>
                                                <td>${{ $cartItem->Product->price }}</td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-primary"
                                                        onclick="updateQuantity({{ $cartItem->id }}, -1)">-</button>
                                                    <span id="quantity_{{ $cartItem->id }}">{{ $cartItem->quantity }}</span>
                                                    <button class="btn btn-sm btn-outline-primary"
                                                        onclick="updateQuantity({{ $cartItem->id }}, 1)">+</button>
                                                </td>
                                                <td>${{ $cartItem->Product->price * $cartItem->quantity }}</td>
                                                <td>
                                                    <button class="btn btn-danger btn-sm"
                                                        onclick="removeItem({{ $cartItem->id }})">Remove</button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <h3>Total: $<span id="total">{{ $total }}</span></h3>
                                <button class="btn btn-success">Checkout</button>
                            </div>

                            <script>
                                function updateQuantity(cartItemId, amount) {
                                    var quantityElement = document.getElementById('quantity_' + cartItemId);
                                    var currentQuantity = parseInt(quantityElement.innerText);
                                    var newQuantity = currentQuantity + amount;
                                    if (newQuantity >= 1) {
                                        quantityElement.innerText = newQuantity;
                                        updateCart(cartItemId, newQuantity);
                                    }
                                }

                                function removeItem(cartItemId) {
                                    var row = document.querySelector('tr[data-cart-item-id="' + cartItemId + '"]');
                                    row.style.display = 'none';
                                    updateCart(cartItemId, 0);
                                }

                                function updateCart(cartItemId, newQuantity) {
                                    // Make an AJAX request to update the cart in the backend
                                    // You can use JavaScript libraries like Axios or fetch API for this
                                }
                            </script>














                            {{-- <tr>
                                <td>
                                    <div class="media">
                                        <div class="d-flex">
                                            <img width="150px" src="img/cart.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <p>ستاند للمصحف الشريف</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h5>JD7.00</h5>
                                </td>
                                <td>
                                    <div class="product_count">
                                        <input type="text" name="qty" id="sst" maxlength="12" value="1" title="Quantity:"
                                            class="input-text qty">
                                        <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
                                            class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
                                        <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
                                            class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
                                    </div>
                                </td>
                                <td>
                                    <h5>JD30.00</h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="media">
                                        <div class="d-flex">
                                            <img width="150px" src="img/cart.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <p>ستاند للمصحف الشريف</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h5>JD7.00</h5>
                                </td>
                                <td>
                                    <div class="product_count">
                                        <input type="text" name="qty" id="sst" maxlength="12" value="1" title="Quantity:"
                                            class="input-text qty">
                                        <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
                                            class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
                                        <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
                                            class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
                                    </div>
                                </td>
                                <td>
                                    <h5>JD30.00</h5>
                                </td>
                            </tr> --}}
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

                                </td>
                                <td>

                                </td>
                                <td>
                                    <h5>المجموع الأولي</h5>
                                </td>
                                <td>
                                    <h5>JD160.00</h5>
                                </td>
                            </tr>
                            <tr class="shipping_area">
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>
                                    <h5>الشراء</h5>
                                </td>
                                <td>
                                    <div class="shipping_box">
                                        <ul class="list">
                                            <li><a href="#">الشحن المجاني</a></li>
                                            <li><a href="#">داخل العاصمة (JD2.00)</a></li>
                                            <li class="active"><a href="#">جميع المحافظات (JD4.00)</a></li>
                                        </ul>
                                        <h6>اكمال عملية الشراء<i class="fa fa-caret-down" aria-hidden="true"></i></h6>
                                        <select class="shipping_select">
                                            <option value="0">إختر المحافظة</option>
                                            <option value="1">إربد</option>
                                            <option value="2">عمان</option>
                                            <option value="4">الزرقة</option>
                                        </select>
                                        <input type="text" placeholder="رمز البريد">
                                        <a class="gray_btn" href="#">تحديث المعلومات</a>
                                    </div>
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
    {{-- <script>
        $(document).ready(function() {
            // Function to load cart items
            function loadCartItems() {
                $.get('/view-cart', function(data) {
                    $('#cart-items').html(data.html);
                });
            }

            // Function to load cart total
            function loadCartTotal() {
                $.get('/cart-total', function(data) {
                    $('#cart-total').html('Total: $' + data.total);
                });
            }

            // Add to Cart
            $('.add-to-cart-btn').click(function() {
                var productId = $(this).data('product-id');
                var quantity = $('#quantity-' + productId).val();

                $.post('/add-to-cart', {
                    product_id: productId,
                    quantity: quantity
                }, function(data) {
                    loadCartItems();
                    loadCartTotal();
                });
            });

            // Update Cart Item
            $(document).on('change', '.update-cart-item', function() {
                var productId = $(this).data('product-id');
                var quantity = $(this).val();

                $.ajax({
                    url: '/update-cart-item',
                    type: 'PUT',
                    data: {
                        product_id: productId,
                        quantity: quantity
                    },
                    success: function(data) {
                        loadCartItems();
                        loadCartTotal();
                    }
                });
            });

            // Remove Cart Item
            $(document).on('click', '.remove-from-cart-btn', function() {
                var productId = $(this).data('product-id');

                $.ajax({
                    url: '/update-cart-item',
                    type: 'PUT',
                    data: {
                        product_id: productId,
                        quantity: 0
                    },
                    success: function(data) {
                        loadCartItems();
                        loadCartTotal();
                    }
                });
            });

            // Initial load of cart items and total
            loadCartItems();
            loadCartTotal();
        });

        // Decrease Quantity
        $(document).on('click', '.decrease-quantity', function() {
            var productId = $(this).data('product-id');
            var quantityElement = $(this).siblings('.quantity');
            var quantity = parseInt(quantityElement.text());

            if (quantity > 1) {
                quantity--;
                quantityElement.text(quantity);

                $.ajax({
                    url: '/update-cart-item',
                    type: 'PUT',
                    data: {
                        product_id: productId,
                        quantity: quantity
                    },
                    success: function(data) {
                        loadCartTotal();
                    }
                });
            }
        });

        // Increase Quantity
        $(document).on('click', '.increase-quantity', function() {
            var productId = $(this).data('product-id');
            var quantityElement = $(this).siblings('.quantity');
            var quantity = parseInt(quantityElement.text());

            quantity++;
            quantityElement.text(quantity);

            $.ajax({
                url: '/update-cart-item',
                type: 'PUT',
                data: {
                    product_id: productId,
                    quantity: quantity
                },
                success: function(data) {
                    loadCartTotal();
                }
            });
        });
    </script> --}}




@endsection
