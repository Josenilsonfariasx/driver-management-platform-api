<?php
namespace App\Services\Driver;

use App\Exceptions\AppError;
use App\Models\Driver;
class CreateDriverService {
  public function execute(array $data){

    $CpfFound = Driver::firstWhere('cpf', $data['cpf']);
    if(!is_null($CpfFound)){
      throw new AppError('There is already a person with this CPF.',400);
    }

    $CellFound = Driver::firstWhere('telephone', $data['telephone']);
    if(!is_null($CellFound)){
      throw new AppError('There is already a person with this number from telephone.',400);
    }

    return Driver::create($data);
  }
}