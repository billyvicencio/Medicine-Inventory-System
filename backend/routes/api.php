<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MedicineController;
use Illuminate\Support\Facades\Route;

Route::post('/login', [AuthController::class, 'login']);
Route::get('/medicines', [MedicineController::class, 'index']);
Route::get('/medicines/{medicine}', [MedicineController::class, 'show']);
Route::post('/medicines', [MedicineController::class, 'store']);
