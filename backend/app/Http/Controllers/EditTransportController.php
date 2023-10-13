<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\EditTransportService;

class EditTransportController extends Controller {
  public function edit(Request $request, string $id){
    $data = $request->all();
    $editTransportService = new EditTransportService();
    return $editTransportService->execute($id, $data);
  }
}