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

// Route::group(['middleware' => 'auth.very_basic'], function() {
  Route::get('/', function () {
    return view('welcome');
  });
  Auth::routes();
  Route::get('/home', 'HomeController@index')->name('home');
  Route::resource('post', 'PostController');
  Route::resource('words', 'WordController');
  Route::get('/quiz', 'QuizController@index');
  Route::get('quiz/words', 'QuizController@getWords');
// });
