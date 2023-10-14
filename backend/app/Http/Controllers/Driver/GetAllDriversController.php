<?php

namespace App\Http\Controllers\Driver;

use App\Http\Controllers\Controller;
use App\Services\Driver\GetAllDriversService;

class GetAllDriversController extends Controller {
  public function read(){
    $createDriverService = new GetAllDriversService();
    return $createDriverService->execute();
  }
}