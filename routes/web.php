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

Route::resource('minify', 'MinifyController')->middleware('auth');
Route::model('minify', 'App\Url');

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/{segment}', 'HomeController@pin')->name('pin-redirect');
Route::get('/{segment}', 'HomeController@redirect')->name('segment-redirect');
