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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'PagesController@home');
Route::resource('/message', 'MessagesController');
//Route::get('/message', 'MessagesController@show');

Route::post('/message/create','MessagesController@create');


Route::get('/acerca', function () {
    return 'nosotros';
});