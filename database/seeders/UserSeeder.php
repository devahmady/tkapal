<?php

namespace Database\Seeders;

use App\Models\Roles;
use App\Models\Users;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $adminRole = Roles::where('name', 'admin')->first();
        $penumpangRole = Roles::where('name', 'penumpang')->first();

        Users::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'role_id' => $adminRole->id,
        ]);

        Users::create([
            'name' => 'Penumpang User',
            'email' => 'penumpang@example.com',
            'password' => Hash::make('password'),
            'role_id' => $penumpangRole->id,
        ]);
    }
}
