<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\EditDriverService;

class EditDriverController extends Controller {
  public function edit(Request $request, string $id){
    $data = $request->all();
    $editDriverService = new EditDriverService();
    return $editDriverService->execute($id, $data);
  }
}