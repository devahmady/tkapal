<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Routes extends Model
{
    use HasFactory;
    protected $guarded = [''];

    public function bookings()
    {
        return $this->hasMany(Bookings::class);
    }

    public function jasa()
    {
        return $this->belongsTo(Jasa::class, 'jasa_id');
    }

    public function fasilitas()
    {
        return $this->belongsTo(Facilities::class, 'facilitias_id'); // Ensure 'facilities_id' is the correct foreign key
    }




    public function transport()
    {
        return $this->belongsTo(Transportations::class, 'transport_id');
    }
}
