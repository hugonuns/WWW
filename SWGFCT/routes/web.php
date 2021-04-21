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
});
Route::get('/default', function () {
    return view('deft/default');
});*/


/**
* route par a pag de perfil
*/
Route::get('/profile', function () {
    return view('profile');
});

/**
*    route par a pag do Prof
*/
Route::resource('pagprof', 'AlunoController');

/**
*    route par a pag do Aluno
*/
Route::get('/pagaluno', function () {
    return view('pagAluno');
});

/**
*    route par a pag do Admin - uploads
*/
Route::get('/upload/{entidade}', 'UploadController@uploadForm')->name('uploadForm');
Route::post('/uploadFile', 'UploadController@uploadFile');

Route::get('pdf','pdfController@gerarPdf');
