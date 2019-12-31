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
Route::get('/projects', 'HomeController@projects')->name('projects');
Route::get('/project/{id}', 'HomeController@show')->name('show');
Route::post('/create', 'HomeController@store')->name('store');
Route::get('/create/project', 'HomeController@add')->name('create');
Route::get('/create/user', 'HomeController@createUser')->name('createuser');
Route::get('/users', 'HomeController@users')->name('users');
Route::get('/state/{state}', 'MainController@getState')->name('getState');
Route::resource('users', 'UserController');