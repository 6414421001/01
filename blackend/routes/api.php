<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Spatie\FlareClient\Api;
use App\Http\Controllers\AlbumAPIController;
use App\Http\Controllers\MuAPIController;

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
Route::get('/album', [AlbumAPIController::class, 'index']);
Route::get('/album/{id}', [AlbumAPIController::class, 'show']);
Route::get('/album/search/{name}', [AlbumAPIController::class,'search']);
Route::post('/album', [AlbumAPIController::class, 'store']);
Route::put('/album/{id}', [AlbumAPIController::class, 'update']);
Route::delete('/album/{id}', [AlbumAPIController::class, 'destroy']);

Route::get('/Mu', [MuAPIController::class, 'index']);
Route::get('/Mu/{id}', [MuAPIController::class, 'show']);
Route::get('/Mu/search/{name}', [MuAPIController::class,'search']);
Route::post('/Mu', [MuAPIController::class, 'store']);
Route::put('/Mu/{id}', [MuAPIController::class, 'update']);
Route::delete('/Mu/{id}', [MuAPIController::class, 'destroy']);