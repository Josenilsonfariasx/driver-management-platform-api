<?php

namespace App\Http\Controllers;

use App\Services\GetInforDriverByIdService;

class GetInforDriverByIdController extends Controller {
  public function getDriverById(string $id){
    $getInforDriverService = new GetInforDriverByIdService();
    return $getInforDriverService->execute($id);
  }
}