<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::patch('/profile/userInfo', [IndexController::class, 'userInfo'])->name('profile.userInfo');
});

require __DIR__ . '/auth.php';

//social login by google
Route::get('/googlelogin', [ProfileController::class, 'googleLogin'])->name('googlelogin');
Route::get('/auth/google/callback', [ProfileController::class, 'googleHandle']);

//---------------------main --------------------

Route::get('/', [IndexController::class, 'home'])->name('home');
Route::get('/Islamiyat/shop/{category_id?}', [IndexController::class, 'shop'])->name('shop');
Route::get('/Islamiyat/product/{product_id}', [IndexController::class, 'product'])->name('product');
Route::get('/Islamiyat/about', [IndexController::class, 'about'])->name('about');
Route::get('/Islamiyat/contact', [IndexController::class, 'contact'])->name('contact');
Route::post('/Islamiyat/contactSend', [IndexController::class, 'contactSend'])->name('contactSend');


// Route::get('/Islamiyat/cart', [CartController::class, 'index'])->name('cart');


Route::get('/Islamiyat/cart', [CartController::class, 'index'])->name('cart');

Route::post('/Islamiyat/cart/add', [CartController::class, 'saveProductToSession'])->name('cartAdd');
Route::post('/Islamiyat/cart/updateS', [CartController::class, 'cartUpdateS'])->name('cartUpdateS');
Route::post('/Islamiyat/cart/updateD', [CartController::class, 'cartUpdateD'])->name('cartUpdateD');
Route::post('/Islamiyat/cart/remove', [CartController::class, 'remove'])->name('cartRemove');
//order
Route::get('/Islamiyat/checkout', [OrderController::class, 'index'])->name('checkout');
Route::post('/Islamiyat/checkout/pay', [OrderController::class, 'pay'])->name('pay');
Route::get('paypal/success', [OrderController::class, 'success'])->name('paypal_success');
Route::get('paypal/cancel', [OrderController::class, 'cancel'])->name('paypal_cancel');
Route::get('/Islamiyat/orderConfirmation', [IndexController::class, 'orderConfirmation'])->name('Confirmation');
//ReviewController
Route::post('/Islamiyat/Review', [ReviewController::class, 'storeReview'])->name('review');




// ------------- dashboard -------------
Route::get('/dashboard_login', [DashboardController::class, 'login'])->name('dashboard_login');
Route::post('/loginAdmin', [DashboardController::class, 'loginAdmin'])->name('loginAdmin');
Route::middleware(['checkUserRole'])->group(function () {
    // dashboard home page
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // main Admin 
    Route::middleware(['CheckAdminRole_0'])->group(function () {
        Route::resource('dashboard/admin', AdminController::class)->names('dashboard.admin');
    });


    Route::middleware(['CheckAdminRole_1'])->group(function () {
        //category
        Route::resource('dashboard/category', CategoryController::class)->names('dashboard.category');
        //product
        Route::resource('dashboard/product', ProductController::class)->names('dashboard.product');
        // product image 
        Route::get('/dashboard/product-imageAddPage/{id}', [ProductController::class, 'imageAddPage'])->name('imageAddPage');
        Route::post('/dashboard/product-imageDelete', [ProductController::class, 'imageDelete'])->name('imageDelete');
        Route::put('/dashboard/product-imageStore/{product}', [ProductController::class, 'imageStore'])->name('imageStore');
        // about 
        Route::resource('dashboard/general/about', GeneralController::class)->names('dashboard.general.about');
         // features  
        Route::get('dashboard/general/features', [GeneralController::class, 'featuresIndex'])->name('dashboard.general.features.Index');
        Route::get('dashboard/general/features/Add', [GeneralController::class, 'featureAdd'])->name('dashboard.general.features.featureAdd');
        Route::post('dashboard/general/features/Store', [GeneralController::class, 'featureStore'])->name('dashboard.general.features.featureStore');
        Route::get('dashboard/general/features/Edit/{featureID}', [GeneralController::class, 'featureEdit'])->name('dashboard.general.features.featureEdit');
        Route::put('dashboard/general/features/Update/{featureID}', [GeneralController::class, 'featureUpdate'])->name('dashboard.general.features.featureUpdate');
        Route::delete('dashboard/general/features/Delete/{featureID}', [GeneralController::class, 'featureDelete'])->name('dashboard.general.features.featureDelete');

    });

    Route::middleware(['CheckAdminRole_2'])->group(function () {
        Route::resource('dashboard/Order', OrderItemController::class)->names('dashboard.order');
        Route::resource('dashboard/contact', ContactController::class)->names('dashboard.contact');
        Route::resource('dashboard/user', UserController::class)->names('dashboard.user');
    });


    Route::get('/dashboard/general/Index_Slider/View', [GeneralController::class, 'Index_SliderView'])->name('Index_SliderView');
    Route::get('/dashboard/general/Index_Slider/Create', [GeneralController::class, 'Index_SliderCreate'])->name('Index_SliderCreate');
    Route::post('/dashboard/general/Index_Slider/Add', [GeneralController::class, 'Index_SliderAdd'])->name('Index_SliderAdd');
    Route::delete('/dashboard/Index_Slider/Delete', [GeneralController::class, 'Index_SliderDelete'])->name('Index_SliderDelete');
    Route::get('/dashboard/orders', [OrderController::class, 'orders'])->name('orders');
    Route::get('/dashboard/orderItems/{product_id}', [OrderItemController::class, 'orderItemsView'])->name('orderItems');
});


// Route::post('/store-shipment', [CheckoutController::class, 'storeShipment'])->name('store-shipment');
// Route::get('paypal/success', [CheckoutController::class, 'success'])->name('paypal_success');
// Route::get('paypal/cancel', [CheckoutController::class, 'cancel'])->name('paypal_cancel');