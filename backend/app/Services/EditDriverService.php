<?php
namespace App\Services;
use App\Exceptions\AppError;
use App\Models\Driver;

class EditDriverService {
  public function execute(string $id, array $data){
    $driver = Driver::find($id);

    if (!$driver) {
      throw new AppError('Driver not found', 404);
    }

    if (isset($data['cpf']) && $data['cpf'] !== $driver->cpf) {
      $existingDriver = Driver::where('cpf', $data['cpf'])->first();

      if ($existingDriver) {
          throw new AppError('CPF already exists for another driver',400);
      }
    }

    if (isset($data['phone']) && $data['phone'] !== $driver->phone) {
      $existingDriver = Driver::where('telephone', $data['telephone'])->first();

      if ($existingDriver) {
          throw new AppError('Phone number already exists for another driver',400);
      }
    }
      $driver->update($data);

      return $driver;
  }
}