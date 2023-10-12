<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller {
  public function create(Request $request){
    return Driver::create($request->all());
  }
}