<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('home/home');
});
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


/* Route::get('/aa', function () {
    $vou = DB::table('vouchers')->select('v_discount')->where('v_content','AXA')->get();
    return view('profile/test', compact('vou'));
})->name('aa');
 */