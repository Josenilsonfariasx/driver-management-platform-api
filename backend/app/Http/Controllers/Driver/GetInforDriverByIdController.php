<?php

namespace App\Http\Controllers\Driver;

use App\Http\Controllers\Controller;
use App\Services\Driver\GetInforDriverByIdService;

class GetInforDriverByIdController extends Controller {
  public function getDriverById(string $id){
    $getInforDriverService = new GetInforDriverByIdService();
    return $getInforDriverService->execute($id);
  }
}