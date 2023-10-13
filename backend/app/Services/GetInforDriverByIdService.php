<?php
namespace App\Services;

use App\Exceptions\AppError;
use App\Models\Driver;
use App\Models\Transport;

class GetInforDriverByIdService {
    public function execute(string $id){
        $driver = Driver::find($id);
        if (!$driver) {
          throw new AppError('driver not found', 404);
        }
        $transportFromDriver = Transport::where('driver_id', $id)->first();
        if (!$transportFromDriver) {
          $driver->transport = 'Driver does not have a registered transport';
      } else {
          $driver->transport = $transportFromDriver;
      }
      return $driver;
    }
}