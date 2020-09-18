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

Route::get('/'      , 'Home@init');
Route::get('/out'   , '\App\Http\Controllers\Auth\LoginController@logout');

Route::view('/about' , 'about');

Route::get('/shop'  , 'Shop@init');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/cart/{inData}','cart@init')->name('cart');

Route::get('/cart','cart@index')->name('cart');

Route::delete('/cart/{inData}','cart@remove');