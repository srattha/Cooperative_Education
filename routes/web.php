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

Route::get('/printstudent', 'PrintstudentController@printstudent')->name('printstudent');
Route::get('/statistic', 'statisticController@statistic')->name('statistic');
Route::get('/download', 'DownloadController@download')->name('download');
Route::post('/home', 'HomeController@index')->name('home');
Route::get('/form', 'FormController@form')->name('form');

Route::get('/data_student', 'data_studentController@data_student')->name('data_student');
Route::post('data_student', 'data_studentController@add_data_student');
Route::get('/editdata_student', 'data_studentController@edit_data_student')->name('editdata_student');
Route::post('editdata_student', 'data_studentController@updatedata_student');

Route::get('/search', 'SearchController@search')->name('search');
Route::post('/search','SearchController@Search');
// Route::get('/', 'HomeController@index')->name('home');
Route::get('/upload_pfd', 'Upload_pfdController@upload_pfd')->name('upload_pfd');

// Admin
Route::get('/user', 'UserController@index')->name('user');
Route::get('CreateUser', 'UserController@CreateUser')->name('CreateUser');
Route::get('EditUser/{id}', 'UserController@EditUser')->name('EditUser')->where('id', '[0-9]+');
Route::get('DeleteUser/{id}', 'UserController@destroy')->name('DeleteUser')->where('id', '[0-9]+');
Route::post('CreateUser', 'UserController@store');
Route::get('importExport', 'MaatwebsiteController@importExport');
Route::get('downloadExcel/{type}', 'MaatwebsiteController@downloadExcel');
Route::post('importExcel', 'MaatwebsiteController@importExcel');
Route::get('/uploadPdf', 'UploadPdfController@index')->name('upload_file');
Route::post('uploadPdf', 'UploadPdfController@storeFile');

Route::get('/index', 'IndexController@index')->name('index');
Route::post('/addUser', 'HomeController@addUser')->name('addUser');
Route::get('/report_cooperative_education', 'ReportCooperativeEducationController@index')->name('search_report');
Route::get('/view_cooperative_education/{id}', 'ReportCooperativeEducationController@view_report')->name('view_report')->where('id', '[0-9]+');
Route::post('/report_cooperative_education', 'ReportCooperativeEducationController@search_report');
Route::get('/establishment', 'EstablishmentController@index')->name('establishment');
Route::get('create_establishment', 'EstablishmentController@create_establishment')->name('create_establishment');
Route::post('create_establishment', 'EstablishmentController@add_establishment');
Route::get('/editestablishment/{id}', 'EstablishmentController@edit_establishment')->name('edit_establishment')->where('id', '[0-9]+');
Route::post('editestablishment', 'EstablishmentController@update_establishment');
Route::get('delete_establishment/{id}', 'EstablishmentController@destroy')->name('delete_establishment')->where('id', '[0-9]+');

Route::get('/faculty', 'FacultyController@index')->name('faculty');
Route::get('/create_faculty', 'FacultyController@create')->name('create_faculty');
Route::post('/create_faculty', 'FacultyController@store');
Route::get('edit_faculty/{id}', 'FacultyController@edit')->name('edit_faculty')->where('id', '[0-9]+');
Route::post('/edit_faculty', 'FacultyController@update');
Route::get('delete_faculty/{id}', 'FacultyController@destroy')->name('delete_faculty')->where('id', '[0-9]+');

Route::get('/branch', 'BranchController@index')->name('branch');
Route::get('/create_branch', 'BranchController@create')->name('create_branch');
Route::post('/create_branch', 'BranchController@store');
Route::get('edit_branch/{id}', 'BranchController@edit')->name('edit_branch')->where('id', '[0-9]+');
Route::post('/edit_branch', 'BranchController@update');
Route::get('delete_branch/{id}', 'BranchController@destroy')->name('delete_branch')->where('id', '[0-9]+');
//Route::get('api/getcompany', 'CompanyController@index');


