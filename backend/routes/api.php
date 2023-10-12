<?php
use App\Http\Controllers\DriverController;
use Illuminate\Support\Facades\Route;

Route::post('/drivers',[DriverController::class, 'create']);