<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SantriController;
use App\Http\Controllers\AsramaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('get-user', [SantriController::class, 'getUser']);
Route::get('get-santri', [SantriController::class, 'getSantri']);
Route::get('get-asrama/{id}', [AsramaController::class, 'getSantriByAsrama']);
Route::get('get-santri/{id}', [SantriController::class, 'getSantriAndAsrama']);