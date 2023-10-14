<?php

namespace App\Http\Controllers\Transport;

use App\Http\Controllers\Controller;
use App\Http\Requests\TransportRequest;
use App\Services\Transport\CreateTransportService;

class TransportController extends Controller {
  public function create(TransportRequest $request){
    $createTransportService = new CreateTransportService();
    return $createTransportService->execute($request->all());
  }
}