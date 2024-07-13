<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transportations extends Model
{
    use HasFactory;
    protected $guarded = [''];
    public function bookings()
    {
        return $this->hasMany(Bookings::class);
    }

    public function facility()
    {
        return $this->belongsTo(Facilities::class);
    }

    public function jasa()
    {
        return $this->belongsTo(Jasa::class);
    }

    public function route()
    {
        return $this->hasMany(Routes::class, 'transport_id');
    }
}
