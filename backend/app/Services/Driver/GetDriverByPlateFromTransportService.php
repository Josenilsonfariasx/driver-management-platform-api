<?php

namespace App\Services\Driver;

use App\Exceptions\AppError;
use App\Models\Transport;

class GetDriverByPlateFromTransportService {
  public function execute(string $plate) {
    $transport = Transport::where('plate', $plate)->first();

    if (!$transport) {
      throw new AppError('Transport not found', 404);
    }

    $driver = $transport->driver;

    if (!$driver) {
      throw new AppError('Driver not found for the given plate', 404);
    }

    return $driver;
  }
}