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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'PurchaseController@home')->name('home');
Route::get('/create', 'PurchaseController@create');
Route::post('/store', 'PurchaseController@store');
Route::get('/browse', 'PurchaseController@browse');
Route::get('/update/{id}','PurchaseController@update')->where('id', '[0-9]+');
Route::post('/delete', 'PurchaseController@delete');
