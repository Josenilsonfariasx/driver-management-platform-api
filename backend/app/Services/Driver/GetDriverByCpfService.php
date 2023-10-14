<?php

namespace App\Services\Driver;

use App\Exceptions\AppError;
use App\Models\Driver;

class GetDriverByCpfService {
  public function execute(string $cpf) {
    $normalizedCpf = preg_replace('/[^0-9]/', '', $cpf);
    $cpfNumber = (int)$normalizedCpf;
    $drivers = Driver::where('cpf', 'LIKE', '%' . $cpfNumber . '%')->get();

    if ($drivers->isEmpty()) {
      throw new AppError('Drivers not found', 404);
    }

    return $drivers;
  }
}

