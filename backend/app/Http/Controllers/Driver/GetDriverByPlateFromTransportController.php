<?php

namespace App\Http\Controllers\Driver;

use App\Http\Controllers\Controller;
use App\Services\Driver\GetDriverByPlateFromTransportService;

class GetDriverByPlateFromTransportController extends Controller {
  public function getDriverByPlate($plate){
    $getDriverByPlateFromTransportService = new GetDriverByPlateFromTransportService();
    return $getDriverByPlateFromTransportService->execute($plate);
  }
}