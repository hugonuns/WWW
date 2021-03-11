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

/*
Route::get('/', function () {
    return view('layout');
});*/

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/default', function () {
    return view('default');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::resource('alunos', 'AlunoController');

Route::get('/', 'AdminPagController@index');
Route::post('/uploadFile', 'AdminPagController@uploadFile');
