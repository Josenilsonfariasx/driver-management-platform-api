<?php
namespace App\Services\Driver;
use App\Exceptions\AppError;
use App\Models\Driver;

class DeleteDriverService {
  public function execute(string $id){
    $driver = Driver::find($id);

    if (!$driver) {
      throw new AppError('Driver not found', 404);
    }
      $driver->Delete();

      return $driver;
  }
}