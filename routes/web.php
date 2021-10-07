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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/userlogout', 'HomeController@logout');
Route::get('/profile','HomeController@profile');
Route::get('/form','HomeController@formPage');
Route::post('/storeData','FormController@store');
Route::get('/formList','FormController@show');
Route::get('/support', 'HomeController@support');
Route::post('/saveReport', 'ReportController@reportSave');
Route::get('/reportShow', 'ReportController@reportShow');


//Admin
Route::namespace("Admin")->prefix('admin')->group(function(){
    Route::get('/', 'HomeController@index')->name('admin.home');
    Route::namespace('Auth')->group(function(){
        Route::get('/login', 'LoginController@showLoginForm')->name('admin.login');
        Route::post('/login', 'LoginController@login');
        Route::post('logout', 'LoginController@logout')->name('admin.logout');
    });
});
Route::get('/userList','Admin\HomeController@userList');
Route::get('/scamReport','Admin\HomeController@scamReport');
Route::get('/userReview','Admin\HomeController@userReview');
Route::get('/scamEdit{id}','Admin\FormController@edit');
Route::get('/scamApprove{id}','Admin\FormController@approve');
Route::post('/updateScamData{id}','Admin\FormController@scamDataupdate');
Route::get('/ScamDelete{id}','Admin\FormController@ScamDelete');

