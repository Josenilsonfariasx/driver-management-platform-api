<?php

namespace App\Http\Controllers;

use App\Services\GetDriverByPlateFromTransportService;

class GetDriverByPlateFromTransportController extends Controller {
  public function getDriverByPlate($plate){
    $getDriverByPlateFromTransportService = new GetDriverByPlateFromTransportService();
    return $getDriverByPlateFromTransportService->execute($plate);
  }
}