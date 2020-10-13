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

Route::get('/', function () {
    return redirect('/shops');
});

Route::get('/shops', 'App\Http\Controllers\ShopController@index')->name('shop.list');
Route::get('/shop/new','App\Http\Controllers\ShopController@create')->name('shop.new');
Route::post('users/', 'App\Http\Controllers\ShopController@store')->name('shop.store');
Route::get('/shop/{id}', 'App\Http\Controllers\ShopController@show')->name('shop.show');
Route::get('/shop/edit/{id}', 'App\Http\Controllers\ShopController@edit')->name('shop.edit');
Route::post('/shop/update/{id}', 'App\Http\Controllers\ShopController@update')->name('shop.update');
Route::delete('/shop/{id}', 'App\Http\Controllers\ShopController@destroy')->name('shop.destroy');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
