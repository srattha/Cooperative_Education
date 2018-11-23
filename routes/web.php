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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/form', 'FormController@form')->name('form');

Route::get('/data_student', 'data_studentController@data_student')->name('data_student');
Route::get('/search_data', 'Search_dataController@Search_data')->name('search_data');
Route::get('/', 'HomeController@index')->name('home');
Route::get('/upload_pfd', 'Upload_pfdController@upload_pfd')->name('upload_pfd');

// Admin
Route::get('importExport', 'MaatwebsiteController@importExport');
Route::get('CreateUser', 'MaatwebsiteController@CreateUser')->name('CreateUser');
Route::get('EditUser/{id}', 'MaatwebsiteController@EditUser')->name('EditUser')->where('id', '[0-9]+');
Route::get('DeleteUser/{id}', 'MaatwebsiteController@destroy')->name('DeleteUser')->where('id', '[0-9]+');
Route::post('CreateUser', 'MaatwebsiteController@store');
Route::get('downloadExcel/{type}', 'MaatwebsiteController@downloadExcel');
Route::post('importExcel', 'MaatwebsiteController@importExcel');
Route::get('uploadPdf', 'UploadPdfController@index')->name('upload_file');
Route::post('uploadPdf', 'UploadPdfController@storeFile');

Route::get('/index', 'IndexController@index')->name('index');
Route::post('/addUser', 'HomeController@addUser')->name('addUser');


