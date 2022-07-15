<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController as Users;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\KHController;
use App\Http\Controllers\ADController as Admin;
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
    return view('welcome');
});

Route::get('index', [Users::class, 'getIndex'])->name('trang-chu');
Route::get('hotel/{type}',[Users::class,'getHotel'])->name('loaikhachsan');
Route::get('/chitiethotel/{id}', [Users::class, 'getChiTiet'])->name('chitiet');
Route::get('free',[Users::class,'getFree'])->name('khuyenmai');

Route::get('dang-nhap',[Users::class,'getLogin'])->name('login1'); 
Route::post('dang-nhap',[Users::class,'postLogin'])->name('login1');

Route::get('dang-ky',[Users::class,'getDangky'])->name('signin');
Route::post('dang-ky',[Users::class,'postDangky'])->name('signin');
Route::get('dang-xuat', function () {
    session()->flush();
    return redirect('index');
})->name('dangxuat');

Route::group(['middleware' => 'checkPermission'], function () {
    Route::get('booking',[Users::class,'getBooking'])->name('datphong');
    Route::post('booking',[Users::class,'postBooking'])->name('datphong');
    Route::get('khpage',[Users::class,'khpage']);
    Route::get('lichsu',[Users::class,'hisdatphong'])->name('lichsu');
    Route::get('suathongtin',[Users::class,'editthongtin'])->name('suathongtin');
    Route::post('suathongtin',[Users::class,'postsua'])->name('suathongtin');
    Route::get('repass',[Users::class,'repass'])->name('repass');
    Route::post('repass',[Users::class,'postrepass'])->name('repass');
});
Route::get('admin' , function () {
    return view('admin.admin');
})->name('admin')->middleware('checkPermission');

Route::get('ajaxhotel' , [Users::class , 'ajaxHotel'])->name('ajaxHotel');




Route::get('quanly/login',[Admin::class,'adminLogin']);
Route::post('quanly/login',[Admin::class,'adminPostLogin']);
Route::get('quanly/logout', [Admin::class, 'logout']);

Route::group(['middleware' => 'adminLogin'], function () {
Route::group(['prefix' => 'quanly'], function() {
    Route::get('tongquan',[Admin::class,'getMain'])->name('main');
    Route::get('hotel',[Admin::class,'listHotel']);
    Route::get('addhotel',[Admin::class,'addHotel']);
    Route::post('addhotel',[Admin::class,'postaddHotel']);
    Route::get('edithotel/{id_hotel}',[Admin::class, 'edithotel']);
    Route::post('edithotel/{id_hotel}',[Admin::class, 'postedithotel']);
    Route::get('xoahotel/{id_hotel}',[Admin::class,'xoahotel']);
    
    Route::get('listuser',[Admin::class,'listkh']);
    Route::get('history',[Admin::class,'lichsu']);

    Route::get('listnv',[Admin::class,'listnv']);
    Route::get('addnv',[Admin::class,'addnv']);
    Route::post('addnv',[Admin::class,'postaddnv']);
    Route::get('editnv/{id}',[Admin::class,'editnv']);
    Route::post('editnv/{id}',[Admin::class,'posteditnv']);
    Route::get('xoanv/{id}',[Admin::class,'xoanhanvien']);

    Route::get('repassadmin',[Admin::class,'repassadmin']);
    Route::post('repassadmin',[Admin::class,'postrepassadmin']);
});
});