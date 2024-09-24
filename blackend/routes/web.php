<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\MuController;
use App\Http\Controllers\albumchatController;
use App\Http\Controllers\PeopleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/kuy01', function () {
    return view('kuy01');
});
Route::get('/kuy02', function () {
    return view('kuy02');
});
Route::get('/kuy03', function () {
    return view('kuy03');
});
Route::get('/Genierock', function () {
    return view('layouts.หน้าหี.Genierock');
});
Route::resource('/Album',AlbumController::class);
Route::resource('/Mu',MuController::class);
Route::get('/albumchat',[albumchatController::class,'index']);
Route::get('/albums',[PeopleController::class,'index']);
Route::get('/album/{album_name}',[PeopleController::class,'detail']);
Auth::routes();

//Route::get('/home', [HomeController::class, 'index'])->name('home');
