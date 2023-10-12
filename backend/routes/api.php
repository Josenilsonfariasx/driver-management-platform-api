<?php
use App\Http\Controllers\{AuthController,DriverController,TransportController};
use Illuminate\Support\Facades\Route;

Route::post('/auth/login',[AuthController::class, 'login']);

route::middleware('jwt.verify')->group(function() {
  Route::post('/drivers',[DriverController::class, 'create']);
  Route::post('/drivers/transport',[TransportController::class, 'create']);
});