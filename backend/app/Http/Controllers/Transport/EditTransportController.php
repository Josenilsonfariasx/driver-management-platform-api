<?php
namespace App\Http\Controllers\Transport;
use App\Http\Controllers\Controller;
use App\Services\Transport\EditTransportService;
use Illuminate\Http\Request;
class EditTransportController extends Controller {
  public function edit(Request $request, string $id){
    $data = $request->all();
    $editTransportService = new EditTransportService();
    return $editTransportService->execute($id, $data);
  }
}