<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\ProductController;

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

Route::get('/login', function () {
    return view('Login');
})->name('login');

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
})->name('logout');
Route::view('register','Registration');
Route::post('/login',[userController::class,'logins'])->name('login');
Route::get('/product',[ProductController::class,'products'])->name('products');
Route::get('detail/{id}',[ProductController::class,'details'])->name('detail');
Route::post('addtocart',[ProductController::class,'AddToCart'])->name('AddtpCart');
Route::get('cartlist',[ProductController::class,'cartlist'])->name('caert_list');
Route::get('removecart/{id}',[ProductController::class,'removeCart'])->name('removecart');
Route::get('Ordernow',[ProductController::class,'OrderNow'])->name('orderNow');
Route::post('orderplaced',[ProductController::class,'OrderPlaced'])->name('orderplaced');
Route::get('myorder',[ProductController::class,'MyOrder'])->name('myOrder');
Route::post('register',[userController::class,'register'])->name('registar');
