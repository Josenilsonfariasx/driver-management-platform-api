<?php

namespace App\Services\Driver;

use App\Exceptions\AppError;
use App\Models\Driver;
use Illuminate\Support\Collection;

class GetDriverByNameService {
  public function execute(string $name): Collection {
    $drivers = Driver::where('name', 'LIKE', '%' . $name . '%')->get();
    if ($drivers->isEmpty()) {
      throw new AppError('Drivers not found', 404);
    }

    return $drivers;
  }
}

