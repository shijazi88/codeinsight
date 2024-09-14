<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ShopController;

Route::controller(HomeController::class)->group(function () {
Route::get('/', 'index')->name('index');
Route::get('/index', 'index')->name('index');
Route::get('/index2', 'index2')->name('index2');
Route::get('/index3', 'index3')->name('index3');
Route::get('/index4', 'index4')->name('index4');
Route::get('/index5','index5')->name('index5');
Route::get('/index6','index6')->name('index6');
Route::get('/index7','index7')->name('index7');
Route::get('/usecase','usecase')->name('usecase');
});

// Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

// setting
Route::prefix('/pages')->group(function () {
    Route::controller(PagesController::class)->group(function () {
        Route::get('/about', 'about')->name('about');
        Route::get('/pricing','pricing')->name('pricing');
        Route::get('/login','login')->name('login');
        Route::get('/blog','blog')->name('blog');
        Route::get('/casedetails','casedetails')->name('casedetails');
        Route::get('/pricingtwo','pricingtwo')->name('pricingtwo');
        Route::get('/registration','registration')->name('registration');
        Route::get('/blogdetails','blogdetails')->name('blogdetails');
        Route::get('/usecase2','usecase2')->name('usecase2');
        Route::get('/pricingthree','pricingthree')->name('pricingthree');
        Route::get('/reset','reset')->name('reset');
        Route::get('/contact','contact')->name('contact');
        Route::get('/casedetails2','casedetails2')->name('casedetails2');
        Route::get('/faq','faq')->name('faq');
        Route::get('/notfound','notfound')->name('notfound');
        Route::get('feature','feature')->name('feature');
    });
});

// AI Pages
Route::prefix('shop')->group(function () {
    Route::controller(ShopController::class)->group(function () {
        Route::get('/shopdetails', 'shopdetails')->name('shopdetails');
        Route::get('/cart', 'cart')->name('cart');
        Route::get('/checkout', 'checkout')->name('checkout');
        Route::get('/login', 'login')->name('login');
        Route::get('/contact', 'contact')->name('contact');
    });
});
