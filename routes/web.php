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

// Route::get('/qwe/zxc', function () {
//     return "<b>Hello</b>";
// });

Route::get('/', function () {
    return redirect('/index');
});

// Route::get('/users/{id}/{name}', function ($id, $name) {
// 	return "USER ID: ".$id." Name: ".$name;
// });

Route::get('/index', 'PagesController@index');

Route::get('/about', 'PagesController@about');

Route::get('/services', 'PagesController@services');

Route::resource('posts', 'PostsController');


Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
