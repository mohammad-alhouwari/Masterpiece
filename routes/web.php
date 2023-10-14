<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;


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
// 1. Handle Adding to Cart
Route::post('/add-to-cart', [CartController::class, 'addToCart']);

// 2. Handle Viewing Cart
Route::get('/view-cart', [CartController::class, 'viewCart']);

// 3. Handle Updating and Removing Items
Route::put('/update-cart-item', [CartController::class, 'updateCartItem']);

// 4. Display Cart Total


Route::get('/Islamiyat/cart', [CartController::class, 'index'])->name('cart');

Route::post('/Islamiyat/cart/add', [CartController::class, 'saveProductToSession'])->name('cartAdd');
Route::post('/Islamiyat/cart/remove', [CartController::class, 'remove'])->name('cartRemove');







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