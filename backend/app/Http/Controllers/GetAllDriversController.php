<?php

namespace App\Http\Controllers;

use App\Services\GetAllDriversService;

class GetAllDriversController extends Controller {
  public function read(){
    $createDriverService = new GetAllDriversService();
    return $createDriverService->execute();
  }
}