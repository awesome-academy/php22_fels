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
Auth::routes();
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');

//login
Route::get('login', [
    'as' => 'login',
    'uses' => 'Auth\LoginController@getLogin'
]);
Route::post('login', [
    'as' => 'login',
    'uses' => 'Auth\LoginController@postLogin'
]);

//register
Route::get('register', [
    'as' => 'register',
    'uses' => 'Auth\RegisterController@getRegister'
]);
Route::post('register', [
    'as' => 'register',
    'uses' => 'Auth\RegisterController@postRegister'
]);

//logout
Route::get('/logout', function(){
   Auth::logout();
   return Redirect::to('login');
});
