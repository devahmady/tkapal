<?php

namespace Database\Seeders;

use App\Models\Bookings;
use App\Models\Routes;
use App\Models\Transportations;
use App\Models\Users;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $user = Users::where('email', 'penumpang@example.com')->first();
        $route = Routes::first();
        $transportation = Transportations::first();

        Bookings::create([
            'user_id' => $user->id,
            'route_id' => $route->id,
            'transportation_id' => $transportation->id,
            'booking_date' => now(),
            'status' => 'confirmed',
        ]);
    }
}
