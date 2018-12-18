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
// Route::get('/', function () {
//     return view('');
// });


// Route::get('/', 'ProductController@index');

Auth::routes();

Route::get('/', [ 
'uses' => 'ProductController@index', 
  'as' => 'product.index'
]);

Route::get('/signup', [ 
'uses' => 'UserController@Signup', 
  'as' => 'user.signup'
]);


Route::post('/signup', [ 
'uses' => 'UserController@store', 
  'as' => 'user.signup'
]);

Route::get('/signin', [ 
'uses' => 'UserController@getSignin', 
  'as' => 'user.signin'
]);


Route::post('/signin', [ 
'uses' => 'UserController@postSignin', 
  'as' => 'user.signin'
]);

Route::get('/user/profile', [ 
'uses' => 'UserController@getProfile', 
  'as' => 'user.profile'
]);




Route::get('/home', 'HomeController@index')->name('home');
