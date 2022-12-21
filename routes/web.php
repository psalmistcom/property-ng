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

Route::view('/', 'index')->name('home');
Route::view('/short_let', 'short_let')->name('short_let');
Route::view('/for_sale', 'for_sale')->name('for_sale');
Route::view('/for_rent', 'for_rent')->name('for_rent');
Route::view('/for_lease', 'for_lease')->name('for_lease');
Route::view('/all_properties', 'all_properties')->name('all_properties');

// Route::get('/', function () {
//     return view('index');
// });
