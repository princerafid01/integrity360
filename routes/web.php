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

Route::get('/', 'HomeController@index');
Route::get('/about-us', 'HomeController@about')->name('about');
Route::get('post-image', 'PostImageController@index')->name('post-image');
Route::get('post-video', 'PostVideoController@index')->name('post-video');
Route::get('/services', 'HomeController@services')->name('services');
Route::get('/service/{id}', 'HomeController@single_service')->name('single_service');
Route::get('portfolio', 'ProjectController@index')->name('portfolio');
Route::get('project/{id}', 'ProjectController@show')->name('single_project');
Route::get('contact', 'HomeController@contact')->name('contact');
Route::post('contact-form', 'HomeController@con')->name('contact-form');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
