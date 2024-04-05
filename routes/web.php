<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ProductImageController;

Route::get('/', [FrontController::class, 'index'])->name('home');
Route::get('/checkout', [AuthController::class, 'checkout'])->name('checkout');
Route::get('/about', [FrontController::class, 'about'])->name('about');
Route::get('/contact', [FrontController::class, 'contact'])->name('contact');

// Route::get('/logout', function () {
//     return (new \App\Http\Controllers\AuthController())->logout();
// })->name('account.logout');


Route::get('/front/product/{title}', [ShopController::class, 'single_product'])->name('front.product');

Route::group(['prefix'=>'account'],function(){

    Route::group(['middleware'=>'guest'],function(){

        
        Route::get('/register', [AuthController::class, 'register'])->name('account.register');
        Route::post('/store', [AuthController::class, 'store'])->name('account.store');


        Route::get('/login', [AuthController::class, 'login'])->name('account.login');
        Route::post('/login', [AuthController::class, 'authenticate'])->name('account.authenticate');
        //Route::get('/logout', [AuthController::class, 'logout'])->name('account.logout');


    });


     Route::group(['middleware'=>'auth'],function(){

        Route::get('/profile', [AuthController::class, 'profile'])->name('account.profile');
        Route::get('/logout', [AuthController::class, 'logout'])->name('account.logout');



});

});

Route::group(['prefix' => 'admin'], function () {
    //public routes
    Route::group(['middleware' => 'admin.guest'], function () {
        Route::get('login', [AdminLoginController::class, 'index'])->name('admin.login');
        Route::post('authenticate', [AdminLoginController::class, 'authenticate'])->name('admin.authenticate');
    });

    Route::group(['middleware' => 'admin.auth'], function () {
        // Add your authenticated admin routes here

        //homecontroller routes (admin)
        Route::get('dashboard', [HomeController::class, 'index'])->name('admin.dashboard');
        Route::get('logout', [HomeController::class, 'logout'])->name('admin.logout');

        //categories routes(admin)
        Route::get('categories/create', [CategoryController::class, 'create'])->name('categories.create');
        Route::get('categories/list', [CategoryController::class, 'index'])->name('categories.list');
        Route::post('/categories/store', [CategoryController::class, 'store'])->name('categories.store');
        Route::get('/categories/destroy/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');
        Route::get('categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
        Route::post('categories/{category}', [CategoryController::class, 'update'])->name('categories.update');

        //products related routes (admin)

        Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
        Route::get('/products/index', [ProductController::class, 'index'])->name('products.index');
        Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');
        Route::get('/products/destroy/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
        

        Route::resource('products', ProductController::class);
        Route::get('/product/{productId}/images/create', [ProductImageController::class, 'create'])->name('product.images.create');
        Route::post('/product/images/store', [ProductImageController::class, 'store'])->name('product.images.store');
    });
});
