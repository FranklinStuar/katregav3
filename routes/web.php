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
Route::get('edit', 'Admin\CompanyController@edit')->name('company.edit');
Route::put('update', 'Admin\CompanyController@update')->name('company.update');
Route::resource('products', 'Admin\ProductController');
Route::resource('groups', 'Admin\ProductGroupController');
Route::resource('marks', 'Admin\MarkController');
Route::resource('lines', 'Admin\ProductLineController');
Route::resource('measurements', 'Admin\MeasurementController');
Route::resource('services', 'Admin\ServiceController');