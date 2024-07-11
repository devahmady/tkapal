<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    use HasFactory;
    protected $guarded = [''];
    public function booking()
    {
        return $this->belongsTo(Bookings::class);
    }

    public function bank()
    {
        return $this->belongsTo(Banks::class);
    }
}