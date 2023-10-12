<?php
use App\Http\Controllers\{AuthController,DriverController};
use Illuminate\Support\Facades\Route;

Route::post('/drivers',[DriverController::class, 'create']);
Route::post('/auth/login',[AuthController::class, 'login']);