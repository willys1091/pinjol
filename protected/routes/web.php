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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', "MainController@index");
Route::get('process', "MainController@process");
Route::get('blog', "MainController@blog");
Route::get('detail', "MainController@detail");
Route::get('contact', "MainController@contact");
Route::post('contact', "MainController@contact_action");
