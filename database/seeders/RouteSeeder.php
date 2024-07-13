<?php

namespace Database\Seeders;

use App\Models\Facilities;
use Illuminate\Database\Seeder;
use App\Models\Jasa;
use App\Models\Routes;
use App\Models\Transportations;

class RouteSeeder extends Seeder
{
    public function run()
    {
        $jasa1 = Jasa::create(['name' => 'Jasa 1']);
        $jasa2 = Jasa::create(['name' => 'Jasa 2']);

        $fasilitas1 = Facilities::create(['name' => 'WIFI', 'description' => 'description WIFI']);
        $fasilitas2 = Facilities::create(['name' => 'WC', 'description' => 'description wc']);

        $transport1 = Transportations::create(['name' => 'Kapal 1', 'capacity' => 100]); // Add capacity value here
        $transport2 = Transportations::create(['name' => 'Kapal 2', 'capacity' => 150]); // Add capacity value here

        Routes::create([
            'origin' => 'Jakarta',
            'destination' => 'Surabaya',
            'departure_time' => '2024-07-15 08:00:00',
            'arrival_time' => '2024-07-15 18:00:00',
            'price' => 500000,
            'jasa_id' => $jasa1->id,
            'transport_id' => $transport1->id,
            'facilitias_id' => $fasilitas1->id,
        ]);

        Routes::create([
            'origin' => 'Bali',
            'destination' => 'Lombok',
            'departure_time' => '2024-07-16 08:00:00',
            'arrival_time' => '2024-07-16 18:00:00',
            'price' => 300000,
            'jasa_id' => $jasa2->id,
            'transport_id' => $transport2->id,
            'facilitias_id' => $fasilitas2->id,
        ]);
    }
}
