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
//printstudent
Route::get('/printstudent', 'PrintstudentController@printstudent')->name('printstudent');
//statistic
Route::get('/statistic', 'StatisticController@statistic')->name('statistic');
// Route::post('/statistic','statistic@statistic'); 
//download
Route::get('/download', 'DownloadController@download')->name('download');
Route::post('/home', 'HomeController@index')->name('home');
Route::get('/form', 'FormController@form')->name('form');
//user
Route::get('/data_student', 'Data_studentController@data_student')->name('data_student');
Route::post('data_student', 'Data_studentController@add_data_student');
Route::get('/editdata_student', 'Data_studentController@edit_data_student')->name('editdata_student');
Route::post('editdata_student', 'Data_studentController@updatedata_student');
//mpf 
Route::get('/mpdf_student/{id}', 'Data_studentController@mpdf_student');
Route::get('/mpdf_report/{id}', 'Data_studentController@mpdf_report');
//search
Route::get('/search', 'SearchController@search')->name('search'); 
Route::post('/search','SearchController@Search');  
Route::get('/down/{name}', 'SearchController@down');

// Route::get('/', 'HomeController@index')->name('home');
//upload_pfd
Route::get('/upload_pfd', 'Upload_pfdController@upload_pfd')->name('upload_pfd');
Route::get('/deletePDF/{name}/{id}', 'UploadPdfController@delete');
Route::get('/down/{name}', 'Upload_pfdController@down');

// Admin
Route::get('/user', 'UserController@index')->name('user');
Route::get('/createuser', 'UserController@createuser')->name('createuser');
Route::post('/createuser', 'UserController@store');
Route::get('edituser/{id}', 'UserController@edituser')->name('edituser')->where('id', '[0-9]+');
Route::post('/edituser', 'UserController@update');
Route::get('deleteuser/{id}', 'UserController@destroy')->name('deleteuser')->where('id', '[0-9]+');

Route::get('importExport', 'MaatwebsiteController@importExport');
Route::get('downloadExcel/{type}', 'MaatwebsiteController@downloadExcel');
Route::post('importExcel', 'MaatwebsiteController@importExcel');
Route::get('/uploadPdf', 'UploadPdfController@index')->name('upload_file');
Route::post('uploadPdf', 'UploadPdfController@storeFile');
Route::get('/index', 'IndexController@index');
Route::get('/', 'IndexController@index'); 
Route::post('/addUser', 'HomeController@addUser')->name('addUser'); 
//Admin student
Route::get('/student', 'StudentController@index')->name('student');
Route::get('create_student', 'StudentController@create_student')->name('create_student');
Route::post('create_student', 'StudentController@add_student');
Route::get('/edit_student/{id}', 'StudentController@edit_student')->name('edit_student')->where('id', '[0-9]+');
Route::post('editstudent', 'StudentController@update_student');
Route::get('delete_student/{id}', 'StudentController@destroy')->name('delete_Student')->where('id', '[0-9]+');
//Admin report_cooperative_education
Route::get('/report_cooperative_education', 'ReportCooperativeEducationController@index')->name('search_report'); 
Route::post('/report_cooperative_education', 'ReportCooperativeEducationController@search_report');
Route::get('/view_cooperative_education/{id}', 'ReportCooperativeEducationController@view_report')->name('view_report')->where('id', '[0-9]+');
Route::post('view_cooperative_education', 'ReportCooperativeEducationController@view_report');
Route::get('downloadcooperative_education/{type}', 'ReportCooperativeEducationController@downloadExcelFile');

//Admin establishment
Route::get('/establishment', 'EstablishmentController@index')->name('establishment');
Route::get('create_establishment', 'EstablishmentController@create_establishment')->name('create_establishment');
Route::post('create_establishment', 'EstablishmentController@add_establishment');
Route::get('/editestablishment/{id}', 'EstablishmentController@edit_establishment')->name('edit_establishment')->where('id', '[0-9]+');
Route::post('editestablishment', 'EstablishmentController@update_establishment');
Route::get('delete_establishment/{id}', 'EstablishmentController@destroy')->name('delete_establishment')->where('id', '[0-9]+');
//Admin faculty
Route::get('/faculty', 'FacultyController@index')->name('faculty');
Route::get('/create_faculty', 'FacultyController@create')->name('create_faculty');
Route::post('/create_faculty', 'FacultyController@store');
Route::get('edit_faculty/{id}', 'FacultyController@edit')->name('edit_faculty')->where('id', '[0-9]+');
Route::post('/edit_faculty', 'FacultyController@update');
Route::get('delete_faculty/{id}', 'FacultyController@destroy')->name('delete_faculty')->where('id', '[0-9]+');
//Admin branch
Route::get('/branch', 'BranchController@index')->name('branch');
Route::get('/create_branch', 'BranchController@create')->name('create_branch');
Route::post('/create_branch', 'BranchController@store');
Route::get('edit_branch/{id}', 'BranchController@edit')->name('edit_branch')->where('id', '[0-9]+');
Route::post('/edit_branch', 'BranchController@update');
Route::get('delete_branch/{id}', 'BranchController@destroy')->name('delete_branch')->where('id', '[0-9]+');
//Route::get('api/getcompany', 'CompanyController@index');


Auth::routes();