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

Route::get('/',function(){
  return view('HomeView');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('inventory','HomeController@index')->name('inventory');
Route::get('dashboard',function(){
  return view('dashboard');
})->name('dashboard');

Route::resource('gate-Entry','GateEntryController');
Route::get('getGateEntry','GateEntryController@getGateEntry');

Route::resource('yarn-Store','YarnStoreController');
Route::get('getYarnStore','YarnStoreController@getYarnStore');

Route::get('{path}','HomeController@index')->where('path','[A-Za-z]+');
