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

Route::get('/account/create','AccountsController@create')->name('account.create');
Route::post('/account/create','AccountsController@store')->name('account.create');
Route::get('/account/show','AccountsController@index')->name('account.show');
Route::get('/account/topup','TopupController@create')->name('account.topup');
Route::post('/spending/create','SpendingsController@store');
Route::get('/spendings/create','SpendingsController@create')->name('spendings.create');
Route::get('/spend/create','SpendingsController@ReadData')->name('spend.create');
Route::get('/spendings/view','SpendingsController@index')->name('spendings.view');
Route::get('/spending/view','SpendingsController@search')->name('spending.view');
Route::get('/topup/view','TopupController@index')->name('topup.view');
Route::post('/topup/make','TopupController@store');


