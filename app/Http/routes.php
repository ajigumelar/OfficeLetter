<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::controller('auth', 'Auth\AuthController');

Route::get('/', 'DefaultController@index');
Route::get('/demo', 'DefaultController@demo');
Route::get('/letter', 'Letter\LetterCategoryController@view');


Route::resource('session', 'SessionConsgsdtroller');

/*
 * Dashboard routing
 */
Route::get('dashboard/profile', 'Dashboard\ProfileController@index');
Route::get('dashboard/password', 'Dashboard\ProfileController@changePassword');
Route::get('dashboard/signature', 'Dashboard\SignatureController@index');
Route::get('dashboard/chat', 'Dashboard\ChatController@index');