<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookings extends Model
{
    use HasFactory;
    protected $guarded = [''];
    public function user()
    {
        return $this->belongsTo(Users::class);
    }

    public function route()
    {
        return $this->belongsTo(Routes::class);
    }

    public function transportation()
    {
        return $this->belongsTo(Transportations::class);
    }

    public function payment()
    {
        return $this->hasOne(Payments::class);
    }
}
