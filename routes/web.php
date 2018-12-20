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

Route::get('/', [ 
'uses' => 'ProductController@index', 
  'as' => 'product.index'
]);

// Route::get('/add-to-cart','{id}', [
//  'uses' => 'ProductControler@getAddToCart',
//  'as' => 'product.addToCart'
// ]);

// Route::get('/', [
//  'uses' => 'ProductControler@index'
//  'as' => 'product.addToCart'
// ]);

Route::resource('/tests', 'TestController');

// Route::get('/tests', 'TestController@index');
// Route::get('/tests/create', 'TestController@create');
// Route::get('/tests/{Test}', 'TestController@show');
// Route::post('/tests','TestController@store');
// Route::get('/tests/{Test}/edit', 'TestController@edit');
// Route::patch('/tests/{Test}', 'TestController@update');
// Route::delete('/tests/{Test}', 'TestController@destroy');

Route::resource('/products', 'ProductController');

// Route::get('/products', 'ProductController@index');
// Route::get('/products/create', 'ProductController@create');
// Route::get('/products/{Product}', 'ProductController@show');
// Route::post('/products','TestController@store');
// Route::get('/products/{Product}/edit', 'ProductController@edit');
// Route::patch('/products/{Product}', 'ProductController@update');
// Route::delete('/products/{Product}', 'ProductController@destroy');







