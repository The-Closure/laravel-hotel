<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RoomSeviceRequest extends Model
{
    use HasFactory ,SoftDeletes;
    protected $fillable=['room_service_id','room_id','reservation_id','employee_id','notes'];

    public function RoomService()
    {
       return $this->belongsTo(Roomservice::class);
    }

    public function Room()
    {
        return $this->belongsTo(Room::class);
    }

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function Reservation()
    {
        return $this->belongsTo(Reservation::class);
    }
}
