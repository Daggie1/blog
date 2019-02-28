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


Route::get('/', 'HomeController@index')->name('home');

Auth::routes();
Route::get('/add_post', 'HomeController@getForm')->name('add_post');
Route::post('/insert', 'HomeController@insert')->name('post_insert');
Route::get('/edit_post/{id}', 'HomeController@edit')->name('edit_post');
Route::get('/delete_post/{id}', 'HomeController@deletePost')->name('delete_post');
Route::post('/update_post/{id}', 'HomeController@update')->name('post_update');
Route::get('/post/{id}', 'HomeController@getPostDetails')->name('post_details');
Route::get('edit_user/{id}','UserController@edit')->name('edit_user');
Route::post('update_user/{id}','UserController@update')->name('update_user');
