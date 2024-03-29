<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

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
    return view('home', [
        'title' => 'PMII Rayon Kominvpam | Home'
    ]);
});

Route::get('/daftar',[RegisterController::class,'index']);
Route::post('/daftar',[RegisterController::class,'registration']);

// ? Auth Controller

Route::get('/login', [AuthController::class,'index']);
Route::post('/login', [AuthController::class, 'authenticate']);
