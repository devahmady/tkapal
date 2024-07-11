<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Jasa;

class JasaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Buat beberapa data dummy untuk jasas
        $jasas = [
            ['name' => 'Jasa 1'],
            ['name' => 'Jasa 2'],
            ['name' => 'Jasa 3'],
        ];

        // Masukkan data ke dalam database
        foreach ($jasas as $jasa) {
            Jasa::create($jasa);
        }
    }
}
