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
        return $this->belongsTo(Jasa::class);
    }
}
