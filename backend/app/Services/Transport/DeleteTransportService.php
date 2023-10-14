<?php
namespace App\Services\Transport;
use App\Exceptions\AppError;
use App\Models\Transport;

class DeleteTransportService {
  public function execute(string $id){
    $Transport = Transport::find($id);

    if (!$Transport) {
      throw new AppError('Transport not found', 404);
    }
      $Transport->Delete();

      return $Transport;
  }
}