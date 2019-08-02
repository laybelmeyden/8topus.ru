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
Route::get('/', 'MainController@main');

Route::get('/one', 'MainController@one');
Route::get('/two', 'MainController@two');
Route::get('/three', 'MainController@three');
Route::get('/four', 'MainController@four');
Route::get('/five', 'MainController@five');
Route::get('/six', 'MainController@six');
Route::get('/seven', 'MainController@seven');
Route::get('/eat', 'MainController@eat');
Route::get('/eat2', 'MainController@eat2');

Route::get('/faq', 'MainController@faq');
Route::get('/fransh', 'MainController@fransh');
Route::get('/contact', 'MainController@contact');

Route::get('/wel', 'MainController@wel');

Route::post('/mainmess', 'MainController@mainmess');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
