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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function(){
  return view('pages.about');
});

Route::get('/test', function(){
  $people =['Taylor', 'Matt', 'Jeffrey'];

  return view('pages.test', compact('people'));
});

Route::get('/data', 'PagesController@home');
Route::get('/aboutAnotherway', 'PagesController@about');//see PagesController


Route::get('/posts', 'PostsController@index');
Route::get('/posts/{id}', 'PostsController@show');

Route::post('/posts/{id}/comment', 'CommentsController@store');
