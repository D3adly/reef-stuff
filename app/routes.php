<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array('as' => 'home', 'uses' => 'App\Controllers\HomeController@index'));

Route::get('admin/logout',
    array('as' => 'admin.logout',
        'uses' => 'App\Controllers\Admin\AuthController@getLogout'));

Route::get('admin/login',
    array('as' => 'admin.login',
        'uses' => 'App\Controllers\Admin\AuthController@getLogin'));

Route::post('admin/login',
    array('as' => 'admin.login.post',
        'uses' => 'App\Controllers\Admin\AuthController@postLogin'));

Route::group(
    array('prefix' => 'admin',
        'before' => 'auth.admin'),
    function(){
        Route::any('/', array('as' => 'admin.home', 'uses' => 'App\Controllers\Admin\AdminController@index'));
        Route::resource('readings', 'App\Controllers\Admin\ReadingsController');
        Route::resource('profile', 'App\Controllers\Admin\ProfileController');
        Route::resource('articles', 'App\Controllers\Admin\ArticlesController');
        Route::resource('reef-o-pedia', 'App\Controllers\Admin\RpediaController');
    }
);