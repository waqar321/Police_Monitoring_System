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
Route::get('vendor/add', function () {
    // return view::make('add');
    return view('add');
});
Route::post('vendor/add', function(){

});
Route::post('vendor/{id}', function(){
		
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
