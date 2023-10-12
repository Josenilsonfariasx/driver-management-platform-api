<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder {
    public function run()
    {
        \App\Models\Admin::create([
            'name' => 'me2_soft',
            'password' => Hash::make('me2-teste'),
        ]);
    }
}
