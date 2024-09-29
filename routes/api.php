<?php

use App\Http\Controllers\API\ApiPortalController;
use App\Http\Controllers\PortalController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/game', [PortalController::class, 'game']);

Route::get('/vendorOne', [ApiPortalController::class, 'vendorOne']);
Route::get('/yutub', [ApiPortalController::class, 'getTikTokTags']);
Route::post('/download', [ApiPortalController::class, 'downloadVideo']);
