<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\ProjectController;
use App\HTTP\Controllers\CartController;
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

Route::get('/', [ProjectController::class ,'index'])->name('home'); 

Route::get('/products',[ProjectController::class ,'products'])->name('products'); 

Route::get('/single_product/{id}', [ProjectController::class ,'single_product'])->name('single_product'); 
Route::get('/cart', [CartController::class ,'cart'])->name('cart'); 
Route::post('/add_to_cart', [CartController::class ,'add_to_cart'])->name('add_to_cart'); 

Route::get('/add_to_cart', function () {
    return redirect('/');
});

Route::get('/about', function () {
    return view('about');
});

