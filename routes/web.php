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

Route::group([ 'middleware' => ['web']], function() {

Route::get('/', 'PagesController@getIndex');

Route::get('auth/register',['as'=>'register','uses'=>'Auth\RegisterController@getRegister']);
Route::post('auth/register',['as'=>'register','uses'=>'Auth\RegisterController@register']);

Route::get('auth/login',['as'=>'login','uses'=>'Auth\LoginController@showLoginForm']);

Route::post('auth/login',['as'=>'login','uses'=>'Auth\LoginController@login']);

Route::get('auth/logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);

Route::get('pages/dashboard','PagesController@getDashboard');

Route::get('pages/welcome','PagesController@getHomepage');

Route::get('about','PagesController@getAbout');

Route::get('pages/home',['as'=>'home','uses'=>'PagesController@getHome']);

});