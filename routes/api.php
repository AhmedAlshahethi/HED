<?php

use App\Http\Controllers\API\APIController;
use App\Http\Middleware\APIAuthMiddleware;
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

Route::post('/login', [APIController::class, 'login']);
Route::get('/instructors', [APIController::class, 'instructors']);
Route::get('/instructors/{instructor}', [APIController::class, 'instructor']);

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/marks', [APIController::class, 'marks']);
    Route::get('/info', [APIController::class, 'info']);
    Route::get('/schedule', [APIController::class, 'schedule']);
    Route::get('/logout', [APIController::class, 'logout']);
});
