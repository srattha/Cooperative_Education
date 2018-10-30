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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/form', 'FormController@form')->name('form');

Route::get('/data_student', 'data_studentController@data_student')->name('data_student');
Route::get('/Search_data', 'Search_dataController@Search_data')->name('Search_data');
Route::get('/', 'HomeController@index')->name('home');
Route::get('/upload_pfd', 'Upload_pfdController@upload_pfd')->name('upload_pfd');
Route::get('importExport', 'MaatwebsiteDemoController@importExport');
Route::get('downloadExcel/{type}', 'MaatwebsiteDemoController@downloadExcel');
Route::post('importExcel', 'MaatwebsiteDemoController@importExcel');
