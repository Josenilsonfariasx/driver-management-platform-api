<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Services\DeleteDriverService;

class DeleteDriverController extends Controller {
  public function delete(string $id){
    $deleteDriverService = new DeleteDriverService();
    return $deleteDriverService->execute($id);
  }
}