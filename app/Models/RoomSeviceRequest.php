<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RoomSeviceRequest extends Model
{
    use HasFactory ,SoftDeletes;
    protected $fillable=['room_service_id','notes','employee_id'];

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
