<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StripePaymentController;
use App\Models\Product;
use Illuminate\Http\Request;

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

/* Route::controller(MainController::class)->group(function(){
        Route::get('/', function () {
            return view('index', [
                'page_name' => 'Home',
                'body_class' => 'bg-dark',
            ]
        );

        Route::get('/product', function () {
                return view('product', ['page_name' => 'Keychron K2']);
            }
        );
    });
}); */

Route::get('/', function () {
    $products = Product::where([['Product_featured',1],['product_status',1]])->get();
    return view('index')->with('products',$products);
})->name('welcome');

Route::get('/login', function () {return view('login');;})->name('login');
Route::get('/register', function () {return view('register');;})->name('register');
Route::get('/user', function () {return view('user-orders');;})->name('orders');
Route::get('/user/settings', function () {return view('user-settings');;})->name('settings');
Route::get('/user/password', function () {return view('user-password');;})->name('password');

Route::get('/forgot_pass', function () {return view('user-forgotpass');;})->name('forgot');

Route::get('/checkout', function () {return view('checkout');})->name('checkout');
Route::get('/checkout/shipping', function () {return view('shipping');})->name('shipping');
Route::get('/checkout/payment', function () {return view('payment');})->name('payment');

//Route::get('/catalog', function () {return view('catalog');});
/* Route::get('/product', function () {
    return view('product');
}); */
Route::resource('product',ProductController::class)->name('*','product');

Route::get('/cart/ajax', [CartController::class, 'ajax']);
Route::Delete('/cart',[CartController::class, 'destroy'])->name('destroy_cart');

Route::get('ajax/search', [ProductController::class,'search'])->name('search');

Route::post('/payment', [StripePaymentController::class, 'payment']);

Route::post('/purchase', function (Request $request) {
    $stripeCharge = $request->user()->charge(
        100, $request->paymentMethodId
    );

    // ...
});
Route::resource('cart', CartController::class)->name('*','cart');
//Route::get('/product/{category}',[ProductController::class,'category'])->name('category','product')->where('category', '[A-Za-z]+');
