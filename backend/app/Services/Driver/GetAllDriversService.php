<?php
namespace App\Services\Driver;

use App\Models\Driver;

class GetAllDriversService {
    public function execute(){
        $allDrivers = Driver::all();
        return $allDrivers;
    }
}