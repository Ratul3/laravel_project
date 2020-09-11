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
    echo "index page";
});
Route::get('/t_registration/rules', 'T_RegistrationController@rules')->name('rules.index');
Route::get('/t_registration', 'T_RegistrationController@insert')->name('registration.index');
Route::post('/t_registration', 'T_RegistrationController@store');
Route::get('/t_login', 'T_LoginController@index')->name('login.index');
Route::post('/t_login', ['uses'=>'T_LoginController@verify']);
Route::get('/t_logout', ['as'=>'logout.index', 'uses'=>'T_logoutController@index']);


/*Route::group(['middleware'=>'sess'], function(){
	Route::get('/home', 'HomeController@index')->middleware('sess');
	Route::get('/home/edit/{id}', 'HomeController@edit')->middleware('sess');
	Route::post('/home/edit/{id}', 'HomeController@update')->middleware('sess');
	Route::get('/home/delete/{id}', 'HomeController@delete')->middleware('sess');
	Route::post('/home/delete/{id}', 'HomeController@destroy')->middleware('sess');
});*/

Route::middleware(['tsess'])->group(function(){

	Route::get('/t_home', 'T_HomeController@index')->name('home.index');

	Route::group(['middleware'=>['ttype']], function(){
		Route::get('/t_home/profile', 'T_ProfileController@tprofile')->name('home.tprofile');
		Route::get('/t_home/profile/edit/{id}', 'T_ProfileController@pedit')->name('home.pedit');
		Route::post('/t_home/profile/edit/{id}', 'T_ProfileController@pupdate');
		Route::get('/t_home/availabletuition', 'T_AvailableController@available')->name('home.availabletuition');
		Route::get('/t_home/offeredtuition', 'T_OfferedController@offered')->name('home.offeredtuition');
		Route::get('/t_home/studentsinfo', 'T_StudentsController@students')->name('home.studentsinfo');
		Route::get('/t_home/teachersinfo', 'T_TeachersController@teachers')->name('home.teachersinfo');
		Route::get('/t_home/ctp', 'T_ProviderController@contact')->name('home.ctp');
		Route::get('/t_home/ratings', 'T_RatingsController@ratings')->name('home.ratings');
	    Route::get('/t_home/answer', 'T_ExamController@answer')->name('home.answer');
		Route::get('/t_home/salary', 'T_SalaryController@salary')->name('home.salary');
		Route::get('/t_home/salary/insert', 'T_SalaryController@sinsert')->name('home.sinsert');
		Route::post('/t_home/salary/insert', 'T_SalaryController@sstore');
		Route::get('/t_home/salary/edit/{id}', 'T_SalaryController@sedit')->name('home.sedit');
		Route::post('/t_home/salary/edit/{id}', 'T_SalaryController@supdate');
		Route::get('/t_home/salary/delete/{id}', 'T_SalaryController@sdelete')->name('home.sdelete');
		Route::post('/t_home/salary/delete/{id}', 'T_SalaryController@sdestroy');
		Route::get('/t_home/fileupload', 'T_FileuploadController@upload')->name('home.fileupload');
		Route::post('/t_home/fileupload', 'T_FileuploadController@store');
		Route::get('/t_home/fileupload/checknotes', 'T_FileuploadController@check')->name('home.checknotes');
		Route::get('/t_home/fileupload/checknotes/delete/{id}', 'T_FileuploadController@delete')->name('home.notesdelete');
		Route::post('/t_home/fileupload/checknotes/delete/{id}', 'T_FileuploadController@destroy');
		
		Route::get('/t_home/schedule', 'T_ScheduleController@schedule')->name('home.schedule');
		Route::get('/t_home/schedule/insert', 'T_ScheduleController@sinsert')->name('home.scheduleinsert');
		Route::post('/t_home/schedule/insert', 'T_ScheduleController@sstore');
		Route::get('/t_home/schedule/edit/{id}', 'T_ScheduleController@sedit')->name('home.scheduleedit');
		Route::post('/t_home/schedule/edit/{id}', 'T_ScheduleController@supdate');
		Route::get('/t_home/schedule/delete/{id}', 'T_ScheduleController@sdelete')->name('home.scheduledelete');
		Route::post('/t_home/schedule/delete/{id}', 'T_ScheduleController@sdestroy');
		
		Route::get('/t_home/complain', 'T_ComplainController@insert')->name('home.cta');
		Route::post('/t_home/complain', 'T_ComplainController@store');
		Route::get('/t_home/complain/check', 'T_ComplainController@check')->name('home.ctacheck');
		Route::get('/t_home/complain/check/delete/{id}', 'T_ComplainController@delete')->name('home.ctadelete');
		Route::post('/t_home/complain/check/delete/{id}', 'T_ComplainController@destroy');
		
		Route::get('/t_home/exam', 'T_ExamController@view')->name('home.exam');
		Route::get('/t_home/exam/take', 'T_ExamController@take')->name('home.takeexam');
		Route::post('/t_home/exam/take', 'T_ExamController@store');
		Route::get('/t_home/exam/take/questions', 'T_ExamController@questions')->name('home.questions');
		Route::get('/t_home/exam/take/questions/delete/{id}', 'T_ExamController@delete')->name('home.qdelete');
		Route::post('/t_home/exam/take/questions/delete/{id}', 'T_ExamController@destroy');
		Route::get('/t_home/exam/grades', 'T_GradeController@upload')->name('home.uploadgrades');
		Route::post('/t_home/exam/grades', 'T_GradeController@store');
		Route::get('/t_home/exam/grades/check', 'T_GradeController@check')->name('home.checkgrades');
		Route::get('/t_home/exam/grades/check/delete/{id}', 'T_GradeController@delete')->name('home.gdelete');
		Route::post('/t_home/exam/grades/check/delete/{id}', 'T_GradeController@destroy');
		
		Route::get('/t_home/notices', 'T_NoticesController@view')->name('home.notices');
		Route::get('/t_home/notices/read', 'T_NoticesController@read')->name('home.readnotices');
		Route::get('/t_home/notices/post', 'T_NoticesController@post')->name('home.postnotices');
		Route::post('/t_home/notices/post', 'T_NoticesController@store');
		Route::get('/t_home/notices/post/check', 'T_NoticesController@posted')->name('home.postednotices');
		Route::get('/t_home/notices/post/check/delete/{id}', 'T_NoticesController@delete')->name('home.ndelete');
		Route::post('/t_home/notices/post/check/delete/{id}', 'T_NoticesController@destroy');
	});
	
});

