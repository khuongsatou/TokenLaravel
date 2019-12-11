<?php

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

Route::middleware('auth:web')->group(function(){
    Route::get('/', 'HomeController@trangchu')->name('trang-chu');
    Route::get('dang-xuat', 'QuanTriVienController@dangXuat')->name('dang-xuat');
});


Route::middleware('guest:web')->group(function(){
    Route::get('dang-nhap', 'QuanTriVienController@hienThiFormDangNhap')->name('dang-nhap');


});

Route::post('xu-ly-dang-nhap', 'QuanTriVienController@xuLyDangNhap')->name('xu-ly-dang-nhap');



