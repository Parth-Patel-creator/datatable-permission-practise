<?php

use Illuminate\Support\Facades\Route;

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

Route::get('getusers','UserController@getusers')->name('getusers');
Route::resource('users', 'UserController');

Route::get('company/create','CompanyController@create')->middleware(['permission:create company']);
Route::get('company/{id}/edit','CompanyController@edit')->middleware(['permission:edit company']);
Route::get('company/{id}','CompanyController@show')->middleware(['permission:read company']);
Route::get('company','CompanyController@index')->middleware(['permission:read company']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
