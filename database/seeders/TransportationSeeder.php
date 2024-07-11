<?php

namespace Database\Seeders;

use App\Models\Facilities;
use App\Models\Jasa;
use App\Models\Transportations;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransportationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Buat data dummy untuk facilities
        $facility1 = Facilities::create(['name' => 'WiFi', 'description' => 'High-speed internet access']);
        $facility2 = Facilities::create(['name' => 'AC', 'description' => 'Air-conditioned cabin']);

        // Buat data dummy untuk jasas
        $jasa1 = Jasa::create(['name' => 'Jasa 1']);
        $jasa2 = Jasa::create(['name' => 'Jasa 2']);

        // Buat data dummy untuk transportations
        Transportations::create([
            'name' => 'Ship A',
            'capacity' => 100,
            'facility_id' => $facility1->id,
            'jasa_id' => $jasa1->id,
        ]);

        Transportations::create([
            'name' => 'Ship B',
            'capacity' => 200,
            'facility_id' => $facility2->id,
            'jasa_id' => $jasa2->id,
        ]);
    }
}
