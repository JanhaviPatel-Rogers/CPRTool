<?php

use App\Http\Controllers\VendorController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;

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

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('login', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'App\Http\Controllers\Auth\LoginController@login');
Route::get('logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'App\Http\Controllers\Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'App\Http\Controllers\Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'App\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'App\Http\Controllers\Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'App\Http\Controllers\Auth\ResetPasswordController@reset')->name('password.update');;

Route::get('/home'. 'App\Http\Controllers\HomeController@index')->name('home');

Route::get('admin/projects/index', 'App\Http\Controllers\ProjectController@index')->name('projects.index');
Route::get('admin/projects/create/new', 'App\Http\Controllers\ProjectController@create')->name('projects.create');
Route::get('admin/projects/createstep2/{ProjectID}', 'App\Http\Controllers\ProjectController@create2')->name('projects.create2');
Route::post('admin/projects/store', 'App\Http\Controllers\ProjectController@store')->name('projects.store');
Route::post('admin/projects/storeStep2/{ProjectID}', 'App\Http\Controllers\ProjectController@storeStep2')->name('projects.storeStep2');
Route::get('admin/projects/pending', 'App\Http\Controllers\ProjectController@pending')->name('projects.pending');
Route::get('admin/projects/pendingAudit', 'App\Http\Controllers\ProjectController@pendingAudit')->name('projects.pendingAudit');


Route::get('admin/projects/{post}/edit',[ProjectController::class,'edit'])->name('projects.edit');
Route::put('admin/projects/{post}/update',[ProjectController::class,'update'])->name('projects.update');




Route::get('admin/CA/index', 'App\Http\Controllers\CAController@index')->name('CA.index');

Route::get('admin/vendors/index', 'App\Http\Controllers\VendorController@index')->name('vendors.index');
Route::get('admin/vendors/create', 'App\Http\Controllers\VendorController@index')->name('vendors.create');
Route::post('admin/vendors/store', 'App\Http\Controllers\VendorController@store')->name('vendors.store');
Route::get('admin/vendors/{post}/details',[VendorController::class,'details'])->name('vendors.details');
Route::get('admin/vendors/{post}/edit',[VendorController::class,'edit'])->name('vendors.edit');
Route::get('admin/vendors/{post}/delete',[VendorController::class,'delete'])->name('vendors.delete');
Route::put('admin/vendors/{post}/update',[VendorController::class,'update'])->name('vendors.update');

Route::get('admin/employees/index', 'App\Http\Controllers\EmployeeController@index')->name('employees.index');
Route::get('admin/employees/create', 'App\Http\Controllers\EmployeeController@create')->name('employees.create');
Route::post('admin/employees/store', 'App\Http\Controllers\EmployeeController@store')->name('employees.store');

Route::get('admin/audit/index', 'App\Http\Controllers\AuditController@index')->name('audit.index');

Route::get('admin/Admin/users', 'App\Http\Controllers\UserController@userIndex')->name('Admin.users');
Route::get('admin/Admin/{post}/delete',[UserController::class,'delete'])->name('users.delete');

Route::get('admin/roles/index', 'App\Http\Controllers\RoleController@index')->name('roles.index');
Route::get('admin/roles/create', 'App\Http\Controllers\RoleController@create')->name('roles.create');
Route::get('admin/roles/update', 'App\Http\Controllers\RoleController@update')->name('roles.update');
Route::post('admin/roles/store', 'App\Http\Controllers\RoleController@store')->name('roles.store');
Route::get('admin/roles/{post}/delete',[RoleController::class,'delete'])->name('roles.delete');




Route::delete('admin/users/{user}/delete', 'App\Http\Controllers\UserController@destroy')->name('user.destroy');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function() {
    Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('admin.index');
    Route::get('/projects/index', 'App\Http\Controllers\ProjectController@index')->name('project.index');
    Route::get('/projects/create/new', 'App\Http\Controllers\ProjectController@create')->name('project.create');
    Route::get('/projects/createstep2', 'App\Http\Controllers\ProjectController@create2')->name('project.create2');
    Route::post('/projects/store', 'App\Http\Controllers\ProjectController@store')->name('projects.store');
//    Route::post('/projects/storeStep2', 'App\Http\Controllers\ProjectController@storeStep2')->name('projects.storeStep2');
    Route::get('/projects/edit/{id}', 'App\Http\Controllers\ProjectController@edit')->name('projects.edit');
    Route::post('/projects/update/{id}', 'App\Http\Controllers\ProjectController@update')->name('projects.update');
    Route::get('projects/delete/{id}','App\Http\Controllers\ProjectController@delete')->name('projects.delete');
    Route::get('projects/remove/{id}','App\Http\Controllers\ProjectController@remove')->name('projects.remove');
    Route::get('projects/details/{id}','App\Http\Controllers\ProjectController@details')->name('projects.details');
    Route::get('/projects/pending', 'App\Http\Controllers\ProjectController@pending')->name('project.pending');
    Route::get('/projects/pendingAudit', 'App\Http\Controllers\ProjectController@pendingAudit')->name('project.pendingAudit');





//    Route::get('admin/CA/index', 'App\Http\Controllers\CAController@index')->name('CA.index');
//    Route::get('/CA/edit/{id}', 'App\Http\Controllers\CAController@edit')->name('CA.edit');
//    Route::post('/CA/update/{id}', 'App\Http\Controllers\CAController@update')->name('CA.update');
//    Route::get('CA/delete/{id}','App\Http\Controllers\CAController@delete')->name('CA.delete');
//    Route::get('CA/remove/{id}','App\Http\Controllers\CAController@remove')->name('CA.remove');
//    Route::get('CA/details/{id}','App\Http\Controllers\CAController@details')->name('CA.details');

    Route::get('/vendors/index', 'App\Http\Controllers\VendorController@index')->name('vendors.index');
    Route::get('/vendors/create', 'App\Http\Controllers\VendorController@create')->name('vendors.create');
    Route::post('/vendors/store', 'App\Http\Controllers\VendorController@store')->name('vendors.store');

    Route::get('/employees/index', 'App\Http\Controllers\EmployeeController@index')->name('employees.index');
    Route::get('/employees/create', 'App\Http\Controllers\EmployeeController@create')->name('employees.create');
    Route::post('/employees/store', 'App\Http\Controllers\EmployeeController@store')->name('employees.store');

//    Route::get('/audit/index', 'App\Http\Controllers\AuditController@index')->name('audit.index');
//
//    Route::get('/Admin/users', 'App\Http\Controllers\UserController@userIndex')->name('Admin.users');
//
//    Route::get('/roles/index', 'App\Http\Controllers\RoleController@index')->name('roles.index');
//    Route::get('/roles/create', 'App\Http\Controllers\RoleController@create')->name('role.create');
//    Route::get('/roles/update', 'App\Http\Controllers\RoleController@update')->name('role.update');
//    Route::post('/roles/store', 'App\Http\Controllers\RoleController@store')->name('roles.store');

Route::middleware('isAdmin:admin')->group(function () {

    Route::get('admin/CA/index', 'App\Http\Controllers\CAController@index')->name('CA.index');
    Route::get('/CA/edit/{id}', 'App\Http\Controllers\CAController@edit')->name('CA.edit');
    Route::post('/CA/update/{id}', 'App\Http\Controllers\CAController@update')->name('CA.update');
    Route::get('CA/delete/{id}','App\Http\Controllers\CAController@delete')->name('CA.delete');
    Route::get('CA/remove/{id}','App\Http\Controllers\CAController@remove')->name('CA.remove');
    Route::get('CA/details/{id}','App\Http\Controllers\CAController@details')->name('CA.details');

    Route::get('/audit/index', 'App\Http\Controllers\AuditController@index')->name('audit.index');

    Route::get('/Admin/users', 'App\Http\Controllers\UserController@userIndex')->name('Admin.users');

    Route::get('/roles/index', 'App\Http\Controllers\RoleController@index')->name('roles.index');
    Route::get('/roles/create', 'App\Http\Controllers\RoleController@create')->name('role.create');
    Route::get('/roles/update', 'App\Http\Controllers\RoleController@update')->name('role.update');
    Route::post('/roles/store', 'App\Http\Controllers\RoleController@store')->name('roles.store');


});




});

