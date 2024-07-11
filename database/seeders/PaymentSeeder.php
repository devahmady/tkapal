<?php

namespace Database\Seeders;

use App\Models\Banks;
use App\Models\Bookings;
use App\Models\Payments;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $booking = Bookings::first();
        $bank = Banks::create(['name' => 'Bank ABC']);

        Payments::create([
            'booking_id' => $booking->id,
            'amount' => 500000,
            'payment_date' => now(),
            'payment_method' => 'credit_card',
            'bank_id' => $bank->id,
        ]);
    }
}
