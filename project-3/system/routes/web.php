<?php

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

Route::get('/', function () {
    return view('home');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/detail', function () {
    return view('detail');
});

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/tamplate', function () {
    return view('tamplate.base');
});

Route::get('/base', function () {
    return view('admin.base');
});

Route::get('/beranda', function () {
    return view('admin.section.beranda');
});

Route::get('/produk', function () {
    return view('admin.section.produk');
});

Route::get('/kategori', function () {
    return view('admin.section.kategori');
});

Route::get('/Promo', function () {
    return view('admin.section.Promo');
});

Route::get('/pelanggan', function () {
    return view('admin.section.pelanggan');
});

Route::get('/supplier', function () {
    return view('admin.section.supplier');
});

Route::get('/login-admin', function () {
    return view('admin.section.login-admin');
});
