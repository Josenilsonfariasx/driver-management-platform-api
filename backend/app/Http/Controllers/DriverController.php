<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDriverRequest;
use App\Services\CreateDriverService;

class DriverController extends Controller {
  public function create(CreateDriverRequest $request){
    $createDriverService = new CreateDriverService();
    return $createDriverService->execute($request->all());
  }
}