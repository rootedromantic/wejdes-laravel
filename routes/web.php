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

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'middleware' => 'admin', 'name' => 'admin'],function(){
    Route::get('/', 'AdminController@index');
    //"admin.posts", the edit posts screen
    Route::get('/posts', 'AdminController@posts')->name('posts');
    //"admin.profile", edit what information is showed as your user
    Route::get('/profile', 'AdminController@profile')->name('profile');
    //"admin.comments", view and manage comments
    Route::get('/comments', 'AdminController@comments')->name('comments');
    //"admin.newsletter", view people who have signed up for the newsletter
    Route::get('/newsletter', 'AdminController@newsletter')->name('newsletter');
    //"admin.settings", extra settings
    Route::group(['prefix' => 'settings', 'name' => 'settings'], function(){
        Route::get('/', 'AdminController@settings');
        //"admin.settings.menu"
        Route::get('/', 'AdminController@menu')->name('menu');
        //"admin.settings.users"
        Route::get('/users', 'AdminController@users')->name('users');
        //"admin.settings.sharing"
        Route::get('/sharing', 'AdminController@sharing')->name('sharing');
    });
});
