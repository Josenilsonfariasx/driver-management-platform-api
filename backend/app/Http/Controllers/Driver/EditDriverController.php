<?php
namespace App\Http\Controllers\Driver;
use App\Http\Controllers\Controller;
use App\Services\Driver\EditDriverService;
use Illuminate\Http\Request;

class EditDriverController extends Controller {
  public function edit(Request $request, string $id){
    $data = $request->all();
    $editDriverService = new EditDriverService();
    return $editDriverService->execute($id, $data);
  }
}