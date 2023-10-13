<?php
namespace App\Services;
use App\Exceptions\AppError;
use App\Models\Transport;

class EditTransportService {
  public function execute(string $id, array $data){
    $transport = Transport::find($id);

    if (!$transport) {
      throw new AppError('transport not found', 404);
    }

    if (isset($data['plate']) && $data['plate'] !== $transport->cpf) {
      $existingtransport = transport::where('plate', $data['plate'])->first();

      if ($existingtransport) {
          throw new AppError('already exists for another transport with this plate', 400);
      }
    }
      $transport->update($data);

      return $transport;
  }
}