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
//gruplama yapıcaz admin için name ve urlsinde admini yazıyoruz
Route::prefix('admin')->name('admin.')->middleware('isLogin')->group(function() {
    Route::get('giris', 'Back\AuthController@login')->name('login');
    Route::post('giris', 'Back\AuthController@loginPost')->name('login.post');
});
Route::prefix('admin')->name('admin.')->middleware('isAdmin')->group(function(){
Route::get('panel','Back\Dashboard@index')->name('dashboard');
Route::resource('makaleler','Back\ArticleController');
Route::get('cikis','Back\AuthController@logout')->name('logout');
});




Route::get('/', 'Front\Homepage@index')->name('homepage');
Route::get('yazilar/sayfa','Front\Homepage@index');
Route::get('/iletisim','Front\Homepage@contact')->name('contact');
Route::get('/kategori/{category}','front\homepage@category')->name('category');
Route::get('/{category}/{slug}','Front\Homepage@single')->name('single');
Route::get('/{sayfa}','Front\Homepage@page')->name('page');
Route::get('/iletisim','Front\Homepage@contact')->name('contact');



