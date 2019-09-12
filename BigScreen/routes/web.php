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

Route::get('/', 'FrontController@index');

Route::get('/validate', function () {
  return view('validate');
});

Route::get('/erreur', function () {
  return view('erreur');
});

Route::get('survey/{link}', function ($link) {
  return App\Survey::find($link);
});

Route::post('', 'FrontController@storeResponses');

Route::get('/administration', 'AdminController@admin');

Route::get('/administration/survey', 'AdminController@survey');

Route::get('/administration/responses', 'AdminController@responses');
