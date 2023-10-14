<?php

namespace App\Http\Controllers\Driver;

use App\Http\Controllers\Controller;
use App\Http\Requests\{CreateDriverRequest};
use App\Services\Driver\CreateDriverService;

class DriverController extends Controller {
  public function create(CreateDriverRequest $request){
    $createDriverService = new CreateDriverService();
    return $createDriverService->execute($request->all());
  }
}