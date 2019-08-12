<?php

// use Symfony\Component\Routing\Route;

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

Route::get('/employee', 'EmployeeController@index');

Route::post('/addImage', 'EmployeeController@store')->name('addImage');

Route::get('/employeepage', 'EmployeeController@display');

Route::get('/editimage/{id}', 'EmployeeController@edit');

Route::put('/updateimage/{id}', 'EmployeeController@update');

Route::get('/deleteimage/{id}', 'EmployeeController@delete');
