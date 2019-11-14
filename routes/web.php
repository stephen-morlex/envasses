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

Auth::routes();
Route::get('/about', 'AboutController@index')->name('about.index');
Route::get('/about/{About}', 'AboutController@show')->name('about.show');
Route::get('/services', 'ServiceController@index')->name('services.index');
Route::get('/services/{Service}', 'ServiceController@show')->name('services.show');
Route::get('/projects', 'ProjectController@index')->name('projects.index');
Route::get('/projects/{Project}', 'ProjectController@show')->name('projects.show');
Route::get('/contact', 'ContactController@index')->name('contact.index');
Route::post('/contact/send', 'ContactController@store')->name('contact.store');
Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});