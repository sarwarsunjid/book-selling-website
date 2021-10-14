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
Auth::routes();

//For Project HomePage
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/','FrontController@index');
//
Route::get('/contact','FrontController@create');
Route::post('/store', 'FrontController@store');

//For Admin LOgin
Route::get('admin/home', 'AdminController@index');

Route::get('admin', 'Admin\LoginController@showLoginForm')->name('admin.login');

Route::post('admin', 'Admin\LoginController@login');

Route::post('admin-password/email', 'Admin\ForgotPasswordController@SendResetLinkEmail')->name('admin.password.email');

Route::get('admin-password/reset', 'Admin\ForgotPasswordController@ShowLinkRequestForm')->name('admin.password.request');

Route::post('admin-password/reset', 'Admin\ResetPasswordController@reset')->name('admin.password.update');

Route::get('admin-password/reset/{token}', 'Admin\ResetPasswordController@ShowResetForm')->name('admin.password.reset');



//For Category 

Route::get('admin/home/category', 'CategoryController@index');
Route::get('admin/home/category/create', 'CategoryController@create');
Route::post('/admin/home/category/store', 'CategoryController@store');
Route::get('admin/home/category/show', 'CategoryController@show');
Route::get('admin/home/category/edit/{id}', 'CategoryController@edit');
Route::get('admin/home/category/update/{id}', 'CategoryController@update');

Route::get('admin/home/delete/{id}', 'AdminController@delete');
Route::get('admin/home/category/destroy/{id}', 'CategoryController@destroy');

//For User Shop
Route::get('User/home/', 'PostController@index');
Route::get('home/create/', 'PostController@create');
Route::post('/home/store/', 'PostController@store');
Route::get('/home/show/', 'PostController@show');
Route::get('/home/edit/{id}', 'PostController@edit');
Route::post('/home/update/{id}', 'PostController@update');
Route::get('/home/delete/{id}', 'PostController@delete');



//For rating
Route::post('home/rating/{post_id}','RatingController@store');

//Route::post('home/rating/create','RatingController@create');
//For Comment
Route::post('home/comment/{post_id}','CommentController@store');

//For User Profile
//Route::get('/home/profile/{id}', 'PostController@profile');

//For search List
Route::get('/home/search/', 'HomeController@te');
//For see post and comment
Route::get('/home/singleshow/{post_id}', 'PostController@singleshow');
//
Route::get('search/', 'FrontController@te');

