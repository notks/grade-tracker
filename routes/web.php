<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Route::get('/123', 'TestController@index');
Route::post('setup','SetupController@index')->name('setup');
Route::get('grades','ShowGradesController@index')->name('showgrades');
Route::post('addgrade','AddGradeController@index')->name('addgrades');
Route::get('deletegrade', 'DeleteGradeController@index')->name('deletegrade');
Route::post('settings','SettingsController@index')->name('settings');
Route::get('settings', function () {
    return view('settings');
});
