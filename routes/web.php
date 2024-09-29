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
