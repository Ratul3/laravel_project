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
		
	});
});

