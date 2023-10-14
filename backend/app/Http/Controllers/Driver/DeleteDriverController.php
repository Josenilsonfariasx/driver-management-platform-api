<?php
namespace App\Http\Controllers\Driver;
use App\Http\Controllers\Controller;
use App\Services\Driver\DeleteDriverService;

class DeleteDriverController extends Controller {
  public function delete(string $id){
    $deleteDriverService = new DeleteDriverService();
    return $deleteDriverService->execute($id);
  }
}