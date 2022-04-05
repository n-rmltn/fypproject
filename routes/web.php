<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StripePaymentController;

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

Route::get('/', function () {return view('index');})->name('welcome');

Route::get('/catalog', function () {return view('catalog');})->name('catalog');
/* Route::get('/product', function () {
    return view('product');
}); */
Route::resource('product',ProductController::class)->name('*','product');

Route::get('/cart/ajax', [CartController::class, 'ajax']);

Route::get('ajax/search', function () {return view('ajax.search');});

Route::post('/payment', [StripePaymentController::class, 'payment']);

Route::resource('cart', CartController::class)->name('*','cart');
