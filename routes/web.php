<?php
use App\User;
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
  //  $users = User::all()->toArray();
  //  dd($users);
  //  exit;
    return view('welcome');
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
