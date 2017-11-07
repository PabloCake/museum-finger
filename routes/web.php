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
/*
route::get('/home', function (){
    return ("vista hola vista");
});
*/
//route::get('/museums','MuseimsController@index');

//usuarios

Route::get('/users','UsersController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/users/{user}', 'UsersController@show');

Route::resource('museums','MuseumsController');
