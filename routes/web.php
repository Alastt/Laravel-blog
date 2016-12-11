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

Route::get('/home', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){

    Route::resource('users', 'UsersController');
    Route::resource('categories', 'CategoriesController');
    Route::get('users/{id}/destroy', [
        'uses' => 'UsersController@destroy',
        'as' => 'users.destroy'
    ]);
    Route::get('categories/{id}/destroy', [
        'uses' => 'CategoriesController@destroy',
        'as' => 'categories.destroy'
    ]);

});

Route::get('admin/auth/login', [
    'uses' => 'Auth\AuthController@getLogin',
    'as' => 'auth.login'
]);
Route::post('admin/auth/login', [
    'uses' => 'Auth\AuthController@postLogin',
    'as' => 'auth.login'
]);
Route::get('admin/auth/logout', [
    'uses' => 'Auth\AuthController@logout',
    'as' => 'auth.logout'
]);

