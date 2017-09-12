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



Route::prefix('admin')->group(function(){
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
//////Password reset Routes
    Route::post('password/email','Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('password/reset','Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('password/reset','Auth\AdminResetPasswordController@reset');
    Route::get('password/reset/{token}','Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
});

    Route::get('superadmin/login', 'Auth\SuperAdminLoginController@showLoginForm')->name('superadmin.login');
    Route::post('superadmin/login', 'Auth\SuperAdminLoginController@login')->name('superadmin.login.submit');
    Route::get('superadmin/logout', 'Auth\SuperAdminLoginController@logout')->name('superadmin.logout');
    Route::get('/superadmin', 'SuperAdminController@index')->name('superadmin.dashboard');
//////Password reset Routes
    Route::post('superadmin/password/email','Auth\SuperAdminForgotPasswordController@sendResetLinkEmail')->name('superadmin.password.email');
    Route::get('superadmin/password/reset','Auth\SuperAdminForgotPasswordController@showLinkRequestForm')->name('superadmin.password.request');
    Route::post('superadmin/password/reset','Auth\SuperAdminResetPasswordController@reset');
    Route::get('superadmin/password/reset/{token}','Auth\SuperAdminResetPasswordController@showResetForm')->name('superadmin.password.reset');

Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');
// Route::get('/dashboard', 'DashboardController@index');
// Route::get('/system-management/{option}', 'SystemMgmtController@index');
Route::post('user-management/search', 'UserManagementController@search')->name('user-management.search');
Route::resource('user-management', 'UserManagementController');
// Route::get('/profile', 'ProfileController@index');
//
//
// Route::resource('employee-management', 'EmployeeManagementController');
// Route::post('employee-management/search', 'EmployeeManagementController@search')->name('employee-management.search');
//
// Route::resource('system-management/department', 'DepartmentController');
// Route::post('system-management/department/search', 'DepartmentController@search')->name('department.search');
//
// Route::resource('system-management/division', 'DivisionController');
// Route::post('system-management/division/search', 'DivisionController@search')->name('division.search');
//
// Route::resource('system-management/country', 'CountryController');
// Route::post('system-management/country/search', 'CountryController@search')->name('country.search');
//
// Route::resource('system-management/state', 'StateController');
// Route::post('system-management/state/search', 'StateController@search')->name('state.search');
//
// Route::resource('system-management/city', 'CityController');
// Route::post('system-management/city/search', 'CityController@search')->name('city.search');
//
// Route::get('system-management/report', 'ReportController@index');
// Route::post('system-management/report/search', 'ReportController@search')->name('report.search');
// Route::post('system-management/report/excel', 'ReportController@exportExcel')->name('report.excel');
// Route::post('system-management/report/pdf', 'ReportController@exportPDF')->name('report.pdf');
//
// Route::get('avatars/{name}', 'EmployeeManagementController@load');
