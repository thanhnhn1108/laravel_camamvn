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
// Route::get('/', function () {
//     return view('frontend.index'); 
//     // return view('admin.login'); 
// });  
Route::resource('/', 'TrangChuController'); 
Route::resource('/post', 'ChiTietController'); 
Route::resource('/loainhac', 'LoaiNhacViewAllController'); 


 



//loại nhạc
Route::resource('admin/loainhac', 'LoaiNhacController');
//ca sĩ 
Route::resource('admin/casi', 'CaSiController');
//loại cảm âm
Route::resource('admin/loaicamam', 'LoaiCamAmController');
//tone
Route::resource('admin/tone', 'ToneNhacController');
//tác giả
Route::resource('admin/tacgia', 'TacGiaConTroller');
//cảm âm bài hát
Route::resource('admin/camam', 'DanhSachCamAmController');
Route::resource('search', 'SearchCamAmController');
Route::resource('camamtheocasi', 'CamAmTheoCaSiController'); 
Route::resource('camamtheoloainhac', 'CamAmTheoLoaiNhacController');


 



Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'HomeController@index')->name('home');
Route::resource('postdetail/{id}', 'GoiCamAmChiTietController');

// 



