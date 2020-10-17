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
Route::get('/product-list','AdminController@productView');
Route::get('/mail', 'AdminController@mailview');
Route::get('/profile','AdminController@profile');
Route::post('profile','AdminController@update_avatar');
Route::get('game/{name}','GameController@gameView');
Route::get('/index','AdminController@indexView');
Route::get('/users' , 'AdminController@userview');
Route::get('/deleteproduct/{id}','AdminController@deleteproduct')->where(array('id'=>'[0-9]+'));
Route::get('/updateproduct/{id}', 'AdminController@updateproductView')->where(array('id' => '[0-9]+'));
Route::post('/updateproduct/{id}', 'AdminController@updateproduct')->where(array('id' => '[0-9]+'));

Route::get('/delete/{id}','AdminController@delete')->where(array('id'=>'[0-9]+'));
Route::get('/update/{id}', 'AdminController@updateView')->where(array('id' => '[0-9]+'));
Route::post('/update/{id}', 'AdminController@update')->where(array('id' => '[0-9]+'));
Route::get('/user-import','ExcelUploadController@userImportView')->name('upload');
Route::post('/user-import-post','ExcelUploadController@userImport')->name('user.import');
Route::get('/product-import','ExcelUploadController@productImportView')->name('upload');
Route::post('/product-import-post','ExcelUploadController@productImport')->name('product.import');
Route::get('/', 'HomeController@index');
Route::get('/home' , 'HomeController@adminindex');
Route::get('/mail','AdminController@sendmail');
Route::get('change-password', 'ChangePasswordController@index');
Route::post('change-password', 'ChangePasswordController@store')->name('change.password');
Route::get('/urun-ekle','ProductController@productCreateView');
Route::post('urun-kaydet','ProductController@productCreate')->name('product.create');
Route::get('/siparis' , 'GameController@siparisView');
Route::get('/siparis/{product_id}','GameController@siparis');
Auth::routes();
