<?php
namespace App\Http\Controllers;
use App\Services\GetDriverByNameService;
class GetDriverByNameController {
  public function getDriverByName(string $name){
    $getDriverByNameService = new GetDriverByNameService();
    return $getDriverByNameService->execute($name);
  }
}