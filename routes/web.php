<?php

use App\Http\Controllers\PortalController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [PortalController::class, 'index'])->name('portal.index');
Route::get('/vendorOne', [PortalController::class, 'vendorOne'])->name('portal.vendorOne');
Route::get('/vendorTwo', [PortalController::class, 'vendorTwo'])->name('portal.vendorTwo');
Route::get('/vendorThree', [PortalController::class, 'vendorThree'])->name('portal.vendorThree');
// Route::get('/kumparan/terbaru', [PortalController::class, 'kumparan_terbaru'])->name('portal.kumparan.terbaru');
Route::prefix('/CNN')->group(function () {
    Route::get('/terbaru', [PortalController::class, 'cnn_terbaru'])->name('portal.cnn.terbaru');
    Route::get('/tekno', [PortalController::class, 'cnn_teknologi'])->name('portal.cnn.teknologi');
    Route::get('/olahraga', [PortalController::class, 'cnn_olahraga'])->name('portal.cnn.olahraga');
    Route::get('/hiburan', [PortalController::class, 'cnn_hiburan'])->name('portal.cnn.hiburan');
    Route::get('/dunia', [PortalController::class, 'cnn_dunia'])->name('portal.cnn.dunia');
    Route::get('/otomotif', [PortalController::class, 'cnn_otomotif'])->name('portal.cnn.otomotif');
    Route::get('/politik', [PortalController::class, 'cnn_politik'])->name('portal.cnn.politik');
    Route::get('/hukum', [PortalController::class, 'cnn_hukum'])->name('portal.cnn.hukum');
    Route::get('/ekonomi', [PortalController::class, 'cnn_ekonomi'])->name('portal.cnn.ekonomi');
    Route::get('/bola', [PortalController::class, 'cnn_bola'])->name('portal.cnn.bola');
    Route::get('/humaniora', [PortalController::class, 'cnn_humaniora'])->name('portal.cnn.humaniora');
    Route::get('/lifestyle', [PortalController::class, 'cnn_lifestyle'])->name('portal.cnn.lifestyle');
});
Route::prefix('/Republika')->group(function () {
    Route::get('/terbaru', [PortalController::class, 'republika_terbaru'])->name('portal.republika.terbaru');
    Route::get('/news', [PortalController::class, 'republika_news'])->name('portal.republika.news');
    Route::get('/daerah', [PortalController::class, 'republika_daerah'])->name('portal.republika.daerah');
});
