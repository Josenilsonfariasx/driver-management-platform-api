<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Services\DeleteDriverService;
use App\Services\DeleteTransportService;

class DeleteTransportController extends Controller {
  public function delete(string $id){
    $deleteTransportService = new DeleteTransportService();
    return $deleteTransportService->execute($id);
  }
}