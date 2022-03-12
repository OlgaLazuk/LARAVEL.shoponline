<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WishListController;
use App\Http\Middleware\CheckPassword;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('main_page');

Route::get('/search', [HomeController::class, 'search'])->name('search');

Route::get('/sort', [CatalogController::class, 'sort'])->name('sort');


Route::get('/catalog/{category}/{product}', [CatalogController::class, 'product'])
    ->name('product');

Route::get('/catalog/{category}', [CatalogController::class, 'category'])
    ->name('catalog_category');

Route::get('/catalog', [CatalogController::class, 'index'])
    ->name('catalog');

Route::get('/register', [LoginController::class, 'register'])
    ->name('register');
Route::post('/register', [LoginController::class, 'registration'])
    ->name('registration');


Route::get('/login', [LoginController::class, 'login'])
    ->name('login');
Route::post('/login', [LoginController::class, 'checkLogin'])
    ->name('checkLogin');


Route::prefix('/adm')->name('admin.')
    //->middleware(CheckPassword::class)
    ->group(function () {
        Route::view('/', 'admin.dashboard');
        Route::resources([
            'categories' => CategoryController::class,
            'products' => ProductController::class
        ]);
    });

Route::post('/add_to_cart', [CartController::class, 'addToCart'])
    ->name('add_to_cart');

Route::get('/cart', [CartController::class, 'showCart'])
    ->name('show_cart');

Route::post('/delete_to_cart/{id}',[CartController::class,'destroy'])
    ->name('delete_to_cart');




Route::post('/add_to_wishlist', [WishListController::class, 'addToWishList'])
    ->name('add_to_wishlist');

Route::get('/wishlist', [WishListController::class, 'showWishList'])
    ->name('show_wishlist');

Route::post('/delete_to_wishlist/{id}',[WishListController::class,'destroyWishList'])
    ->name('delete_to_wishlist');





Route::get('/checkout', [CheckoutController::class, 'index'])
    ->name('show_checkout');
Route::post('/checkout', [CheckoutController::class, 'checkout'])
    ->name('checkout');


//
//Route::post('/cart/plus/{id}', [CartController::class, 'cartPlus'])
//    ->name('cart_plus');
//Route::post('/cart/minus/{id}', [CartController::class, 'cartMinus'])
//    ->name('cart_minus');


