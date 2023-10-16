<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;


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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';



//---------------------main --------------------

Route::get('/Islamiyat', [ProductController::class, 'home'])->name('home');
Route::get('/Islamiyat/shop/{category_id}', [ProductController::class, 'shop'])->name('shop');
Route::get('/Islamiyat/product/{product_id}', [ProductController::class, 'product'])->name('product');


// Route::get('/Islamiyat/cart', [CartController::class, 'index'])->name('cart');


Route::get('/Islamiyat/cart', [CartController::class, 'index'])->name('cart');

Route::post('/Islamiyat/cart/add', [CartController::class, 'saveProductToSession'])->name('cartAdd');
Route::post('/Islamiyat/cart/updateS', [CartController::class, 'cartUpdateS'])->name('cartUpdateS');
Route::post('/Islamiyat/cart/updateD', [CartController::class, 'cartUpdateD'])->name('cartUpdateD');
Route::post('/Islamiyat/cart/remove', [CartController::class, 'remove'])->name('cartRemove');


//order
Route::get('/Islamiyat/checkout', [OrderController::class, 'index'])->name('checkout');
Route::post('/Islamiyat/checkout/pay', [OrderController::class, 'pay'])->name('pay');





// ------------- dashboard -------------
Route::get('/dashboard', function () {
    return view('dash.index');
})->name('dashboard');
Route::get('/dashboard/test', function () {
    return view('dash.jquery-datatable');
});

Route::resource('dashboard/user', UserController::class)->names('dashboard.user');
Route::resource('dashboard/category', CategoryController::class)->names('dashboard.category');
Route::resource('dashboard/product', ProductController::class)->names('dashboard.product');