<?php
namespace App\Http\Controllers;
use App\Services\GetDriverByCpfService;
class GetDriverByCpfController {
  public function getDriverByCpf($cpf){
    $getDriverByCpfService = new GetDriverByCpfService();
    return $getDriverByCpfService->execute($cpf);
  }
}