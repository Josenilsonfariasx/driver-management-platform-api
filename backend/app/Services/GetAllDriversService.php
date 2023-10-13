<?php
namespace App\Services;

use App\Models\Driver;

class GetAllDriversService {
    public function execute(){
        $allDrivers = Driver::all();
        return $allDrivers;
    }
}