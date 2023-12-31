<?php
// Driver
use App\Http\Controllers\Driver\{DeleteDriverController,DriverController, EditDriverController, GetAllDriversController, GetDriverByCpfController, GetDriverByNameController, GetDriverByPlateFromTransportController, GetInforDriverByIdController,};
// Transport
use App\Http\Controllers\Transport\{ DeleteTransportController,EditTransportController,  TransportController};
// Admin
use App\Http\Controllers\Admin\AuthController;

// Routes
use Illuminate\Support\Facades\Route;

// Admin
Route::post('/auth/login',[AuthController::class, 'login']);

route::middleware('jwt.verify')->group(function() {
  // ----------GET----------
  Route::get('/drivers',[GetAllDriversController::class, 'read']);
  Route::get('/drivers/{id}/info', [GetInforDriverByIdController::class, 'getDriverById']);
  Route::get('/drivers/search/{name}', [GetDriverByNameController::class, 'getDriverByName']);
  Route::get('/drivers/search/cpf/{cpf}', [GetDriverByCpfController::class, 'getDriverByCpf']);
  Route::get('/drivers/search/plate/{plate}', [GetDriverByPlateFromTransportController::class, 'getDriverByPlate']);

  // ----------POST----------
  Route::post('/drivers',[DriverController::class, 'create']);
  Route::post('/transport',[TransportController::class, 'create']);
  
  // ----------PUT----------
  Route::put('/drivers/{id}', [EditDriverController::class, 'edit']);
  Route::put('/transport/{id}', [EditTransportController::class, 'edit']);
  
  // ----------DELETE----------
  Route::delete('/drivers/{id}', [DeleteDriverController::class, 'delete']);
  Route::delete('/transport/{id}', [DeleteTransportController::class, 'delete']);
});