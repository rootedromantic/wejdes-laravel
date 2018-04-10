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

Route::group(['prefix' => 'admin', 'middleware' => 'admin'],function(){
    Route::get('/', 'AdminController@index')->name('admin');
    //"admin.posts", the edit posts screen
    Route::get('/posts', 'AdminController@posts')->name('admin.posts');
    Route::get('/posts/add', 'AdminController@posts')->name('admin.posts.add');
    Route::get('/posts/edit', 'AdminController@posts')->name('admin.posts.edit');
    Route::get('/posts/categories', 'AdminController@posts')->name('admin.posts.categories');
    //"admin.profile", edit what information is showed as your user
    Route::get('/profile', 'UsersController@profile')->name('admin.profile');
    Route::post('/profile', 'UsersController@update');
    //"admin.profile.settings", change password, email, etc
    Route::get('/profile/settings', 'AdminController@profileSettings')->name('admin.profile.settings');
    Route::get('/profile/social', 'AdminController@profileSocial')->name('admin.profile.social');
    //"admin.comments", view and manage comments
    Route::get('/comments', 'AdminController@comments')->name('admin.comments');
    //"admin.newsletter", view people who have signed up for the newsletter
    Route::get('/newsletter', 'AdminController@newsletter')->name('admin.newsletter');
    //"admin.settings", extra settings
    Route::group(['prefix' => 'settings'], function(){
        Route::get('/', 'AdminController@settings')->name('admin.settings');
        //"admin.settings.menu"
        Route::get('/menu', 'AdminController@menu')->name('admin.settings.menu');
        //"admin.settings.users"
        Route::get('/users', 'AdminController@users')->name('admin.settings.users');
        //"admin.settings.sharing"
        Route::get('/sharing', 'AdminController@sharing')->name('admin.settings.sharing');
    });
});
