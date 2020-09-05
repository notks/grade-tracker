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

Route::get('home', 'HomeController@index')->name('home');
Route::post('setup','SetupController@index')->name('setup');
Route::get('grades','ShowGradesController@index')->name('showGrades');
Route::post('addgrade','AddGradeController@index')->name('addGrades');
Route::get('deletegrade', 'DeleteGradeController@index')->name('deleteGrade');
Route::post('settings','SettingsController@index')->name('changeSettings');
Route::get('settings', 'SettingsController@show')->name('settings');
Route::get('adminhome', 'AdminHomeController@index')->name('adminhome');
Route::post('adminsetup', 'AdminSetupController@index')->name('adminsetup');
Route::get('deleteuser', 'AdminSetupController@delete')->name('deleteUser');
Route::get('admingrades', 'AdminHomeController@show')->name('adminGrades');
Route::get('printgrades', 'AdminHomeController@print')->name('printgrades');
Route::get('deleteusers', 'SettingsController@deleteusers')->name('deleteAllUsers');
Route::post('addsubject','SubjectControler@save')->name('addSubject');
Route::get('subjects','SubjectControler@index')->name('subjects');
Route::get('deletesubject','SubjectControler@delete')->name('deleteSubject');
Route::get('deleteclass','ClassesController@delete')->name('deleteClass');
Route::get('classes','ClassesController@index')->name('classes');
Route::post('addclass','ClassesController@save')->name('addclass');


