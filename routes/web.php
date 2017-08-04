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

//ArrayExample
//目录
Route::get('/array','ArrayExampleController@index');

Route::get('/array/ex1','ArrayExampleController@ex1');

Route::get('/array/ex2','ArrayExampleController@ex2');

Route::get('/array/ex3','ArrayExampleController@ex3');

Route::get('/array/ex4','ArrayExampleController@ex4');
Route::get('/array/ex5','ArrayExampleController@ex5');
Route::get('/array/ex6','ArrayExampleController@ex6');
Route::get('/array/ex7','ArrayExampleController@ex7');
Route::get('/array/ex8','ArrayExampleController@ex8');
Route::get('/array/ex9','ArrayExampleController@ex9');
Route::get('/array/ex10','ArrayExampleController@ex10');
Route::get('/array/ex11','ArrayExampleController@ex11');
Route::get('/array/ex12','ArrayExampleController@ex12');
Route::get('/array/ex13','ArrayExampleController@ex13');
Route::get('/array/ex14','ArrayExampleController@ex14');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
