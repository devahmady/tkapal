<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    protected $guarded = [''];
    public function role()
    {
        return $this->belongsTo(Roles::class, 'role_id');
    }

    public function bookings()
    {
        return $this->hasMany(Bookings::class);
    }
}
