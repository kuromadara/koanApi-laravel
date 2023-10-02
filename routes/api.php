<?php

use App\Http\Controllers\Api\KoanController;
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

Route::get('/count', [KoanController::class, 'count']);
Route::get('/all', [KoanController::class, 'allKoans']);
Route::post('/koan', [KoanController::class, 'koan']);

