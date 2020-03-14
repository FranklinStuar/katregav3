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
Route::group(['prefix' => 'sri'], function () {
    Route::get('edit', 'Admin\SriController@edit')->name('sri.edit');
    Route::put('update', 'Admin\SriController@update')->name('sri.update');
    Route::post('add-retention', 'Admin\SriController@addRetention')->name('sri.add-retention');
    Route::delete('remove-retention/{retention_id}', 'Admin\SriController@removeRetention')->name('sri.remove-retention');
});
Route::resource('retentions', 'Admin\RetentionController');

Route::resource('groups', 'Admin\ProductGroupController');
Route::resource('marks', 'Admin\MarkController');
Route::resource('lines', 'Admin\ProductLineController');
Route::resource('measurements', 'Admin\MeasurementController');
Route::resource('products', 'Admin\ProductController');
Route::resource('services', 'Admin\ServiceController');

Route::resource('clients', 'Admin\ClientController');
Route::resource('client-types', 'Admin\TypeClientController');
Route::resource('client-categories', 'Admin\CategoryClientController');
Route::resource('client-zones', 'Admin\ZoneClientController');

Route::resource('employees', 'Admin\EmployeeController');
Route::resource('employee-types', 'Admin\TypeEmployeeController');

Route::resource('providers', 'Admin\ProviderController');
Route::resource('provider-types', 'Admin\TypeProviderController');

Route::get('provider/{id}/providers-retentions', 'Admin\ProviderController@retentionIndex')->name('providers.retentions');
Route::post('provider/{id}/add-retention', 'Admin\ProviderController@addRetention')->name('provider.add-retention');
Route::delete('provider/{id}/remove-retention/{retention_id}', 'Admin\ProviderController@removeRetention')->name('provider.remove-retention');

Route::resource('purchases', 'Admin\PurchaseController');