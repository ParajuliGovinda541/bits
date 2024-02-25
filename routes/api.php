<?php

use App\Http\Controllers\Api\ClientController;
use App\Http\Controllers\Api\NoticeController;
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


Route::get('/notices', [NoticeController::class, 'index']);
Route::post('/notices/store', [NoticeController::class,'store']);
Route::get('/notices/edit/{id}', [NoticeController::class,'edit']);
Route::post('/notices/update/{id}', [NoticeController::class,'update']);
Route::post('/notices/delete', [NoticeController::class,'destroy']);



Route::get('/clients', [ClientController::class, 'index']);
Route::post('/clients/store', [ClientController::class,'store']);
Route::get('/clients/edit/{id}', [ClientController::class,'edit']);
Route::post('/clients/update/{id}', [ClientController::class,'update']);
Route::post('/clients/delete', [ClientController::class,'destroy']);






Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
