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

//organization/team
Route::get('teamDetail', 'teamController@index');
Route::post('/teams', 'teamController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/verify','Auth\RegisterController@verifyUser')->name('verify.user');
