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


Route::get('/', 'MainController@index');
Route::get('/contactanos', 'MainController@contactanos');
Route::get('/about', 'MainController@about');
Route::get('/search', 'MainController@search')->name('product.search');
Route::get('/tv', 'MainController@indextv')->name('tv');
Route::get('/telefono', 'MainController@indextelefono')->name('telefono');
Route::get('/horno', 'MainController@indexhorno')->name('horno');
Route::get('/camara', 'MainController@indexcamara')->name('camara');
Route::get('/productonoexistente', 'MainController@search')->name('product.search');
Route::get('/faq', 'FaqController@index');
Route::get('/subirproductos', 'SubirproductosController@index');
Route::get('/subirproductos/new', 'SubirproductosController@create');
Route::post('/subirproductos', 'SubirproductosController@store');

Route::get('/editar', 'EditarController@index');
Route::get('/show/{id}', 'EditarController@show'); 
Route::get('/delete/{id}', 'EditarController@destroy');
Route::get('/update/{id}', 'EditarController@go');
Route::put('/update/{id}', 'EditarController@update');

Route::get('/add-to-cart/{id}', 'MainController@addToCard')->name('product.addToCard');
Route::get('/productsCart', 'MainController@productsCart')->name('product.productsCart');
Route::get('/remove/{id}', 'MainController@removeFromCard')->name('product.productsCart');
Route::get('/removeItem/{id}', 'MainController@removeFromCardAll')->name('product.productsCart');
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
