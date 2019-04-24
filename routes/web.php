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
Route::resource('/post', 'PostController');

// Permission and role
Route::get('/permission', 'PostController@permission');
Route::post('/add/role', 'PostController@addRole');
Route::post('/add/permission', 'PostController@addPermission');
Route::post('/assign/permission', 'PostController@assignPermission');
Route::post('/assign/role', 'PostController@assignRole');
Route::get('/remove/permission/{role_id}/{permission_id}', 'PostController@removePermission');



// employee
Route::resource('/employee', 'EmployeeInfoController');


//tasks
Route::get('/task', 'TaskController@index');
Route::post('/task/1', 'TaskController@task1');
Route::post('/task/2', 'TaskController@task2');
Route::post('/task/3', 'TaskController@task3');
Route::post('/task/4', 'TaskController@task4');
Route::post('/task/5', 'TaskController@task5');
Route::post('/task/6', 'TaskController@task6');


//// Schedule //
Route::get('/schedule','ScheduleController@index');
Route::post('/schedule','ScheduleController@store');