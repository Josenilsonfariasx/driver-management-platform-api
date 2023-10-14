<?php
namespace App\Http\Controllers\Driver;

use App\Services\Driver\GetDriverByNameService;

class GetDriverByNameController {
  public function getDriverByName(string $name){
    $getDriverByNameService = new GetDriverByNameService();
    return $getDriverByNameService->execute($name);
  }
}