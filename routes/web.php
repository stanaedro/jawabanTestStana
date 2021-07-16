<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Soal1Controller;
use App\Http\Controllers\Soal2Controller;
use App\Http\Controllers\Soal3Controller;
use App\Http\Controllers\Soal4Controller;
use App\Http\Controllers\Soal5Controller;


Route::get('/', [HomeController::class, 'index']);
Route::get('/soal1', [Soal1Controller::class, 'index']);
Route::get('/soal2', [Soal2Controller::class, 'index']);
Route::get('/soal3', [Soal3Controller::class, 'index']);
Route::get('/soal4', [Soal4Controller::class, 'index']);
Route::get('/soal5', [Soal5Controller::class, 'index']);
Route::post('/soal2', 'Soal2Controller@inputText');
