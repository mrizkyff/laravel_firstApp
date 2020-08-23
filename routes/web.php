<?php

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

// Route::get('/', function () {
//     return view('index');
// });
// Route::get('halo', function () {
//     return 'ini adalah rute halo';
// });
// Route::get('about', function () {
//     $nama = 'sysadmin';
//     return view('about',['nama_user' => $nama]);
// });

Route::get('/', 'PageController@home');
Route::get('/about', 'PageController@about');
Route::get('/mahasiswa', 'MahasiswaController@index');

// student
Route::get('/student', 'StudentsController@index');
Route::get('/student/create', 'StudentsController@create');
Route::get('/student/{student}', 'StudentsController@show');
Route::get('/student/{student}/edit', 'StudentsController@edit');
Route::patch('/student/{student}', 'StudentsController@update');
Route::delete('/student/{student}', 'StudentsController@destroy');
Route::post('/student', 'StudentsController@store');

