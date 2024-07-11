<?php

namespace Database\Seeders;

use App\Models\Facilities;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FacilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Facilities::create(['name' => 'WiFi', 'description' => 'High-speed internet access']);
        Facilities::create(['name' => 'AC', 'description' => 'Air-conditioned cabin']);
    }
}
