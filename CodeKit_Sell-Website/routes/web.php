<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\MyController;
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

//------------------Xem lich su don hang--------------------
Route::get('/lichsu',[MyController::class ,'lichsudonhang'])->name('lichsu');

//------------------Xem don hang--------------------

Route::get('/donhang',[MyController::class ,'donhang'])->name('donhang');



Route::get('/chitiet', function () {
    $id = DB::table('products')->get();
    return view('profile/chitietdonhang',compact('id'));
})->name('chitiet');

Route::get('/muahang/{id}', function ($sum) {
    $thanhpho = DB::table('devvn_tinhthanhpho')->orderBy('matp','ASC')->get();
    return view('profile/muahang',compact('thanhpho','sum'));
})->name('muahang');

//------------------Xem dia chi thanh toan--------------------

Route::get('/diachi',function () {
    $user = DB::table('devvn_tinhthanhpho')->orderBy('matp','ASC')->get();
    return view('profile/diachimuahang', compact('user'));
})->name('diachi');
Route::post('/diachi',[MyController::class ,'select_delivery_home'])->name('gui');

Route::post('/ship',[MyController::class ,'ship'])->name('ship');

//------------------Vouchers--------------------

Route::post('/voucher',[MyController::class ,'vouchers'])->name('voucher');


Route::post('/chitiet/{v}',[MyController::class ,'del_product'])->name('del_product');

//-------------------Nhap so luong --------------
Route::post('/increase/{in}',[MyController::class ,'increase'])->name('increase');
Route::post('/decrease/{de}',[MyController::class ,'decrease'])->name('decrease'); 


Route::get('/test',function () {
    return view('profile/test');
});


//-----------------Thai_branch----------------------

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/signin', function () {
    return view('signin');
})->name('signin');

Route::get('/signup', function () {
    return view('signup');
})->name('signup');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/shop', [ShopController::class, 'Shop'])->name('shop');
Route::get('/product/{id}', [ShopController::class, 'getProduct'])->name('product');
Route::post('/product/add/{v}', [ShopController::class, 'add_cart'])->name('add_cart');