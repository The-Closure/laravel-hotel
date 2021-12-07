<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    public function room_type()
    {
        return $this->belongsTo(RoomType::class);
    }
    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
