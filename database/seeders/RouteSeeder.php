<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Route;
use App\Models\Jasa;
use App\Models\Routes;

class RouteSeeder extends Seeder
{
    public function run()
    {
        // Ambil data jasa yang sudah ada
        $jasa1 = Jasa::where('name', 'Jasa 1')->first();
        $jasa2 = Jasa::where('name', 'Jasa 2')->first();

        // Buat beberapa data dummy untuk routes
        $routes = [
            [
                'origin' => 'Jakarta',
                'destination' => 'Surabaya',
                'departure_time' => '2024-07-15 08:00:00',
                'arrival_time' => '2024-07-15 18:00:00',
                'price' => 500000,
                'jasa_id' => $jasa1->id
            ],
            [
                'origin' => 'Bali',
                'destination' => 'Lombok',
                'departure_time' => '2024-07-20 10:00:00',
                'arrival_time' => '2024-07-20 14:00:00',
                'price' => 300000,
                'jasa_id' => $jasa2->id
            ],
            // Tambahkan data dummy lainnya jika diperlukan
        ];

        // Masukkan data ke dalam database
        foreach ($routes as $route) {
            Routes::create($route);
        }
    }
}
