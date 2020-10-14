<?php

use App\Http\Middleware\PostRouteMiddleware;
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
Route::any('setup','SetupController@index')->name('setup')->middleware(PostRouteMiddleware::class);
Route::get('grades','GradeController@show')->name('showGrades');
Route::any('addgrade','GradeController@store')->name('addGrades')->middleware(PostRouteMiddleware::class);
Route::get('deletegrade', 'GradeController@destroy')->name('deleteGrade');
Route::any('settings','SettingsController@index')->name('changeSettings')->middleware(PostRouteMiddleware::class);
Route::get('settings', 'SettingsController@show')->name('settings');
Route::get('adminhome', 'AdminHomeController@index')->name('adminhome');
Route::any('adminsetup', 'AdminSetupController@index')->name('adminsetup')->middleware(PostRouteMiddleware::class);
Route::get('deleteuser', 'AdminSetupController@delete')->name('deleteUser');
Route::get('admingrades', 'AdminHomeController@show')->name('adminGrades');
Route::get('printgrades', 'AdminHomeController@print')->name('printgrades');
Route::get('deleteusers', 'SettingsController@deleteusers')->name('deleteAllUsers');
Route::any('addsubject','SubjectControler@save')->name('addSubject')->middleware(PostRouteMiddleware::class);
Route::get('subjects','SubjectControler@index')->name('subjects');
Route::get('deletesubject','SubjectControler@delete')->name('deleteSubject');
Route::get('deleteclass','ClassesController@delete')->name('deleteClass');
Route::get('classes','ClassesController@index')->name('classes');
Route::any('addclass','ClassesController@save')->name('addclass')->middleware(PostRouteMiddleware::class);


