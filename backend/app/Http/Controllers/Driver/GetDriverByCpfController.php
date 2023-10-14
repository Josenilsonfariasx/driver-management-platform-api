<?php
namespace App\Http\Controllers\Driver;

use App\Services\Driver\GetDriverByCpfService;

class GetDriverByCpfController {
  public function getDriverByCpf($cpf){
    $getDriverByCpfService = new GetDriverByCpfService();
    return $getDriverByCpfService->execute($cpf);
  }
}