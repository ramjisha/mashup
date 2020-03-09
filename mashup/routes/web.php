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
// exersise
Route::get('/register','UserController@index');
// post method
Route::get('/user', 'UserController@showRegisterPage');
Route::post('/user', 'UserController@register');     
// ouery builder
// select query
Route::get('/list', 'HomeController@listUsers');
// insert query
Route::get('/insertQuery', 'HomeController@showRegisterForm');
 Route::post('/insertQuery', 'HomeController@registerUser');
//  update Query
 //route to show the Edit Form to user
 Route::get('/edit-user/{userId}', 'HomeController@showUserEditForm');
 //route to update the details after form submission.
 Route::post('/edit-user/{userId}', 'HomeController@updateUser');
//  delete Query
 //route to delete user
 Route::get('/delete-user/{userId}', 'HomeController@deleteUser');
//  authentication
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// model
//route to get posts
Route::get('/list-posts', 'PostController@list')->middleware('auth');
// insert model
//route to show post creation form
Route::get('/create-post', 'PostController@postCreationForm')->middleware('auth');

//route to submit the post
Route::post('/create-post', 'PostController@create')->middleware('auth');
// update model

//route to show post edit form
Route::get('/edit-post/{postId}', 'PostController@edit')->middleware('auth');

//route to submit the updated post
Route::post('/edit-post/{postId}', 'PostController@update')->middleware('auth');
// model delete

//route to delete post
Route::get('/delete-post/{postId}', 'PostController@delete')->middleware('auth');