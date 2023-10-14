<?php
namespace App\Http\Controllers\Transport;
use App\Http\Controllers\Controller;
use App\Services\Transport\DeleteTransportService;

class DeleteTransportController extends Controller {
  public function delete(string $id){
    $deleteTransportService = new DeleteTransportService();
    return $deleteTransportService->execute($id);
  }
}