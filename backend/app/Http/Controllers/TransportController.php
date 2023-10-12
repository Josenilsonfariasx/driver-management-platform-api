<?php

namespace App\Http\Controllers;

use App\Http\Requests\TransportRequest;
use App\Services\CreateTransportService;

class TransportController extends Controller {
  public function create(TransportRequest $request){
    $createTransportService = new CreateTransportService();
    return $createTransportService->execute($request->all());
  }
}