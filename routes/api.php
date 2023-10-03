<?php

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
/**
 * запрос должен содержать Headers:
 * Accept => application/json
 */
Route::post('/login',[\App\Http\Controllers\LoginController::class,'login'])->name('auth.login');


/**
 * запрос должен содержать Headers:
 * 1. Accept => application/json
 * 2. Authorization => Bearer token (token из запроса после авторизации)
 */
Route::middleware('auth:sanctum')->get('/test',[\App\Http\Controllers\TestController::class, 'test'])->name('test');

