<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomSeviceRequest extends Model
{
    use HasFactory ;
    protected $fillable=['room_service_id','room_id','reservation_id','notes','employee_id'];

    public function RoomService()
    {
       return $this->belongsTo(Roomservice::class);
    }

    // ***To be uncommented by the developer with the Room task***
    // public function Room()
    // {
    //     return $this->belongsTo(Room::class);
    // }
}
