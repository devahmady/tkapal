<?php

namespace Database\Seeders;

use App\Models\Banks;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Banks::create(['name' => 'Bank ABC']);
        Banks::create(['name' => 'Bank XYZ']);
    }
}