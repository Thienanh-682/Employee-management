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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('staffs')->group(function (){
    Route::get('index','StaffController@index')->name('staffs.index');
    Route::get('create','StaffController@create')->name('staffs.create');
    Route::post('create','StaffController@store')->name('staffs.store');
    Route::get('delete/{id}','StaffController@delete')->name('staffs.delete');
    Route::get('edit/{id}','StaffController@edit')->name('staffs.edit');
    Route::post('edit/{id}','StaffController@update')->name('staffs.update');
    Route::get('search','StaffController@search')->name('staffs.search');
});
