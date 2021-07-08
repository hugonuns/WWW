<?php

use Inertia\Inertia;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\PagProfController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VisitaController;

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

Route::middleware(['auth'])->group(function () {

    /** route para a pag de perfil*/
    Route::resource('/profile', 'ProfileController');

    /** route para a pag do Prof */
    Route::resource('/prof','PagProfController');

    /** route para a pag do registo de visitas */
    Route::resource('/visita', 'VisitaController');

    /** route para a pag do Aluno */
    Route::resource('/aluno','PagAlunoController');

    /** route para a pag do Admin */
    Route::get('/admin', [UploadController::class, 'index'])
        ->name('admin');
    /** route para a pag do Admin - uploads */
    Route::post('/admin', [UploadController::class, 'uploadFile'])
        ->name('adminUploads');

    /** route para a pag do PDF */
    Route::get('ProtocoloFormacaoPdf',[PdfController::class, 'gerarProtocoloFormacaoPdf'])->name('PFPdf');
    Route::get('ProtocoloParceriaPdf',[PdfController::class, 'gerarProtocoloParceriaPdf'])->name('PPPdf');
    Route::get('ProtocoloTrabalhoIndividualPdf',[PdfController::class, 'gerarProtocoloTrabalhoIndividualPdf'])->name('PTIPdf');

});

