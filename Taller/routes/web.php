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

Route::get('/','MainController@index');
/*
Route::get('/', function () {
  return redirect('home');
});
*/


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('hotels', 'HotelController');

//Route::resource('userHotes', 'UserHoteController');

Route::resource('comments', 'CommentController');