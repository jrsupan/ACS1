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
    return view('auth.login');
});

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/level', 'LevelController');
Route::resource('/schoolyear', 'SchoolyearController');
Route::resource('/student', 'StudentController');
Route::resource('/staff', 'StaffController');
Route::resource('/attendance', 'AttendanceController');
Route::resource('/staffattendance', 'StaffattendanceController');
Route::resource('/announcement', 'AnnouncementController');
Route::name('student.filter')->get('/filter/student', 'StudentController@filter');
Route::post('import', 'HomeController@import')->name('import');
Route::get('/export_excel/excel', 'HomeController@excel')->name('export_excel.excel');