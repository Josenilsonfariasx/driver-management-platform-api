<?php
use App\Http\Controllers\{AuthController,DriverController, GetAllDriversController, GetInforDriverByIdController, TransportController};
use Illuminate\Support\Facades\Route;

Route::post('/auth/login',[AuthController::class, 'login']);

route::middleware('jwt.verify')->group(function() {
  // GET
  Route::get('/drivers',[GetAllDriversController::class, 'read']);
  Route::get('/drivers/{id}/info', [GetInforDriverByIdController::class, 'getDriverById']);
  // POST
  Route::post('/drivers',[DriverController::class, 'create']);
  Route::post('/drivers/transport',[TransportController::class, 'create']);
});