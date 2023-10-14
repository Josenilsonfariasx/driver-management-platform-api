<?php
namespace App\Services\Transport;

use App\Exceptions\AppError;
use App\Models\Transport;
use App\Models\Driver;

class CreateTransportService {
  public function execute( array $data){
    $driver_id = $data['driver_id'];
    $driver = Driver::where('id', $driver_id)->first();

    if (!$driver) {
      throw new AppError('Motorista não encontrado.', 404);
    }

    $plateFound = Transport::firstWhere('plate', $data['plate']);
    if (!is_null($plateFound)) {
      throw new AppError('Já existe um transporte com esta placa.', 400);
    }
    
    return Transport::create($data);
  }
}
