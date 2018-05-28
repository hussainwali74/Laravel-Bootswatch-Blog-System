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
Route::get('/contact', [
    'uses' => 'PagesController@getContact',
]);

Route::get('/about', [
    'uses' => 'PagesController@getAbout'
]);

Route::get('/', [
    'uses' => 'PagesController@getIndex'
]);

//for a single post
Route::get('/page/{id}', [
    'as' => 'pages.single',
    'uses' => 'PostController@show'
]);


// Route::resource('posts', 'PostController');

Route::get('/posts/create', [
    'as' =>'posts.create',
    'uses' => 'PostController@create'
]);

//show all posts
Route::get('/posts', [
    'as' =>'posts.index',
    'uses' => 'PostController@index'
]);

Route::post('/posts/store',[
    'as' => 'posts.store',
    'uses' => 'PostController@store'
]);
Route::get('/posts/{id}',[
    'as' => 'posts.show',
    'uses' => 'PostController@show'
]);
Route::get('/posts/{id}/edit',[
    'as' => 'posts.edit',
    'uses' => 'PostController@edit'
]);
Route::get('/posts/{id}/update',[
    'as' => 'posts.update',
    'uses' => 'PostController@update'
]);
Route::delete('/posts/{id}',[
    'as' => 'posts.destroy',
    'uses' => 'PostController@destroy'
]);
 
// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
