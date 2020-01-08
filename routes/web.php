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

Auth::routes([
    'register' => false,
]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/state/{state}', 'MainController@getState')->name('getState');
Route::get('/state/projects/{project}', 'MainController@getProject')->name('getProject');
Route::resource('people', 'UserController');
Route::resource('projects', 'ProjectController');
Route::post('projects/upload/{project}', 'ProjectController@imageUpload')->name('image.upload');
