<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StripePaymentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookingController;
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

Route::group(['middleware' => ['guest']], function() {
    Route::get('/login', function () {return view('login');})->name('login');
    Route::post('/login', [UserController::class, 'Authenticate'])->name('login.perform');
    Route::get('/register', function () {return view('register');})->name('register');
    Route::post('/register', [UserController::class, 'register'])->name('register.perform');
    Route::get('/forgot_pass', function () {return view('user-forgotpass');})->name('forgot');
});

Route::group(['middleware' => ['auth']], function() {
    Route::get('/user', [BookingController::class,'user_order'])->name('orders');
    Route::get('/user/details/{id}', [BookingController::class,'user_order_detail'])->name('orders-details');
    Route::get('/user/settings', function () {return view('user-settings');})->name('settings');
    Route::post('user/settings/update', [UserController::class, 'update'])->name('settings.update');
    Route::get('/user/password', function () {return view('user-password');})->name('password');
    Route::post('user/password/update', [UserController::class, 'update_password'])->name('password.update');
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
    Route::get('/checkout/shipping', function () {return view('shipping');})->name('shipping');
    Route::get('/checkout/payment', function () {return view('payment');})->name('payment');
    Route::get('/checkout', function () {return view('checkout');})->name('checkout');
    Route::post('/checkout', [BookingController::class, 'booking'])->name('booking.submit');
});

Route::group(['middleware' => ['admin']], function () {
    Route::get('/admin', function () {return view('admin');})->name('admin');
    Route::get('/admin/orders', [BookingController::class,'admin_order_list'])->name('admin-orders');
    Route::get('/admin/orders/details/{id}', [BookingController::class,'admin_order_detail'])->name('admin-orders-details');
    Route::get('/admin/product', [ProductController::class,'admin_list'])->name('admin-product');
    Route::get('/admin/product/add', function () {return view('admin-product-add');})->name('admin-add-product');
    Route::post('/admin/product/add', [ProductController::class, 'admin_add_prod'])->name('admin-add-product.add');
    Route::get('/admin/product/alter/{id}', [ProductController::class,'admin_edit_product'])->name('admin-product-alter');
    Route::post('/admin/product/alter/{id}', [ProductController::class, 'admin_alter_prod'])->name('admin-product-alter.alter');
    Route::post('/admin/prod_image/delete/{id}', [ProductController::class, 'admin_del_prod_image'])->name('admin-product-del-image.del');
    Route::get('/admin/user', [UserController::class, 'admin_user'])->name('admin-user');
    Route::get('/admin/user/alt/{id}', [UserController::class, 'admin_edit_user'])->name('admin-user-alter');
    Route::post('/admin/user/alt/{id}/update', [UserController::class, 'admin_edit_user_update'])->name('admin-user-alter.update');
});


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
