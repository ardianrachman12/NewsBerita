<?php

use App\Http\Controllers\API\ApiPortalController;
use App\Http\Controllers\PlayController;
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
Route::get('/vendorFour', [PortalController::class, 'vendorFour'])->name('portal.vendorFour');
Route::get('/vendorFive', [PortalController::class, 'vendorFive'])->name('portal.vendorFive');
Route::get('/vendorSix', [PortalController::class, 'vendorSix'])->name('portal.vendorSix');
Route::get('/vendorSeven', [PortalController::class, 'vendorSeven'])->name('portal.vendorSeven');

Route::prefix('/Antara')->group(function () {
    Route::get('/terbaru', [PortalController::class, 'antara_terbaru'])->name('portal.antara.terbaru');
    Route::get('/tekno', [PortalController::class, 'antara_tekno'])->name('portal.antara.tekno');
    Route::get('/olahraga', [PortalController::class, 'antara_olahraga'])->name('portal.antara.olahraga');
    Route::get('/hiburan', [PortalController::class, 'antara_hiburan'])->name('portal.antara.hiburan');
    Route::get('/dunia', [PortalController::class, 'antara_dunia'])->name('portal.antara.dunia');
    Route::get('/otomotif', [PortalController::class, 'antara_otomotif'])->name('portal.antara.otomotif');
    Route::get('/politik', [PortalController::class, 'antara_politik'])->name('portal.antara.politik');
    Route::get('/hukum', [PortalController::class, 'antara_hukum'])->name('portal.antara.hukum');
    Route::get('/ekonomi', [PortalController::class, 'antara_ekonomi'])->name('portal.antara.ekonomi');
    Route::get('/bola', [PortalController::class, 'antara_bola'])->name('portal.antara.bola');
    Route::get('/humaniora', [PortalController::class, 'antara_humaniora'])->name('portal.antara.humaniora');
    Route::get('/lifestyle', [PortalController::class, 'antara_lifestyle'])->name('portal.antara.lifestyle');
});
Route::prefix('/Republika')->group(function () {
    Route::get('/terbaru', [PortalController::class, 'republika_terbaru'])->name('portal.republika.terbaru');
    Route::get('/news', [PortalController::class, 'republika_news'])->name('portal.republika.news');
    Route::get('/daerah', [PortalController::class, 'republika_daerah'])->name('portal.republika.daerah');
    Route::get('/khazanah', [PortalController::class, 'republika_khazanah'])->name('portal.republika.khazanah');
    Route::get('/islam', [PortalController::class, 'republika_islam'])->name('portal.republika.islam');
    Route::get('/bola', [PortalController::class, 'republika_bola'])->name('portal.republika.bola');
    Route::get('/internasional', [PortalController::class, 'republika_daerah'])->name('portal.republika.daerah');
    Route::get('/leisure', [PortalController::class, 'republika_daerah'])->name('portal.republika.daerah');
});
Route::get('/JPNN/terbaru', [PortalController::class, 'jpnn_terbaru'])->name('portal.jpnn.terbaru');
Route::get('/Kumparan/terbaru', [PortalController::class, 'kumparan_terbaru'])->name('portal.kumparan.terbaru');
Route::prefix('/CNN')->group(function () {
    Route::get('/terbaru', [PortalController::class, 'cnn_terbaru'])->name('portal.cnn.terbaru');
    Route::get('/teknologi', [PortalController::class, 'cnn_teknologi'])->name('portal.cnn.teknologi');
    Route::get('/olahraga', [PortalController::class, 'cnn_olahraga'])->name('portal.cnn.olahraga');
    Route::get('/hiburan', [PortalController::class, 'cnn_hiburan'])->name('portal.cnn.hiburan');
    Route::get('/nasional', [PortalController::class, 'cnn_nasional'])->name('portal.cnn.nasional');
    Route::get('/internasional', [PortalController::class, 'cnn_internasional'])->name('portal.cnn.internasional');
    Route::get('/ekonomi', [PortalController::class, 'cnn_ekonomi'])->name('portal.cnn.ekonomi');
    Route::get('/gayaHidup', [PortalController::class, 'cnn_gayaHidup'])->name('portal.cnn.gayaHidup');
});
Route::prefix('/CNBC')->group(function () {
    Route::get('/terbaru', [PortalController::class, 'cnbc_terbaru'])->name('portal.cnbc.terbaru');
    Route::get('/investment', [PortalController::class, 'cnbc_investment'])->name('portal.cnbc.investment');
    Route::get('/news', [PortalController::class, 'cnbc_news'])->name('portal.cnbc.news');
    Route::get('/market', [PortalController::class, 'cnbc_market'])->name('portal.cnbc.market');
    Route::get('/entrepreneur', [PortalController::class, 'cnbc_entrepreneur'])->name('portal.cnbc.entrepreneur');
    Route::get('/syariah', [PortalController::class, 'cnbc_syariah'])->name('portal.cnbc.syariah');
    Route::get('/tech', [PortalController::class, 'cnbc_tech'])->name('portal.cnbc.tech');
    Route::get('/lifestyle', [PortalController::class, 'cnbc_lifestyle'])->name('portal.cnbc.lifestyle');
    Route::get('/opini', [PortalController::class, 'cnbc_opini'])->name('portal.cnbc.opini');
    Route::get('/profil', [PortalController::class, 'cnbc_profil'])->name('portal.cnbc.profil');
});
Route::prefix('/Sindo')->group(function () {
    Route::get('/terbaru', [PortalController::class, 'sindonews_terbaru'])->name('portal.sindonews.terbaru');
    Route::get('/nasional', [PortalController::class, 'sindonews_nasional'])->name('portal.sindonews.nasional');
    Route::get('/metro', [PortalController::class, 'sindonews_metro'])->name('portal.sindonews.metro');
    Route::get('/ekbis', [PortalController::class, 'sindonews_ekbis'])->name('portal.sindonews.ekbis');
    Route::get('/international', [PortalController::class, 'sindonews_international'])->name('portal.sindonews.international');
    Route::get('/daerah', [PortalController::class, 'sindonews_daerah'])->name('portal.sindonews.daerah');
    Route::get('/sports', [PortalController::class, 'sindonews_sports'])->name('portal.sindonews.sports');
    Route::get('/otomotif', [PortalController::class, 'sindonews_otomotif'])->name('portal.sindonews.otomotif');
    Route::get('/tekno', [PortalController::class, 'sindonews_tekno'])->name('portal.sindonews.tekno');
    Route::get('/sains', [PortalController::class, 'sindonews_sains'])->name('portal.sindonews.sains');
    Route::get('/edukasi', [PortalController::class, 'sindonews_edukasi'])->name('portal.sindonews.edukasi');
    Route::get('/lifestyle', [PortalController::class, 'sindonews_lifestyle'])->name('portal.sindonews.lifestyle');
    Route::get('/kalam', [PortalController::class, 'sindonews_kalam'])->name('portal.sindonews.kalam');
});

Route::get('/download' , [PlayController::class, 'index'])->name('download.index');
Route::get('/downloadmp3', [PlayController::class, 'downloadMp3'])->name('downloadMp3');
Route::get('/check-unfollow', [ApiPortalController::class, 'checkUnfollowers']);

Route::get('play', function () {
    return view('playground.playground');
});