<?php
use App\Http\Controllers\{AuthController, DeleteDriverController, DeleteTransportController, DriverController, EditDriverController, EditTransportController, GetAllDriversController, GetDriverByCpfController, GetDriverByNameController, GetInforDriverByIdController, TransportController};
use Illuminate\Support\Facades\Route;

Route::post('/auth/login',[AuthController::class, 'login']);

route::middleware('jwt.verify')->group(function() {
  // GET
  Route::get('/drivers',[GetAllDriversController::class, 'read']);
  Route::get('/drivers/{id}/info', [GetInforDriverByIdController::class, 'getDriverById']);
  Route::get('/drivers/search/{name}', [GetDriverByNameController::class, 'getDriverByName']);
  Route::get('/drivers/search/cpf/{cpf}', [GetDriverByCpfController::class, 'getDriverByCpf']);

  // POST
  Route::post('/drivers',[DriverController::class, 'create']);
  Route::post('/transport',[TransportController::class, 'create']);
  // PUT
  Route::put('/drivers/{id}', [EditDriverController::class, 'edit']);
  Route::put('/transport/{id}', [EditTransportController::class, 'edit']);
  // DELETE
  Route::delete('/drivers/{id}', [DeleteDriverController::class, 'delete']);
  Route::delete('/transport/{id}', [DeleteTransportController::class, 'delete']);
});