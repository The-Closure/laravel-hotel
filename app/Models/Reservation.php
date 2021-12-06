<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = ['price', 'user_id', 'room_id' ,'offer_id', 'paid','started_at','ended_at','paid_at', 'canceled_at',
];
    
}



