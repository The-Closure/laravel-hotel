<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Roomservicerequest extends Model
{
    use HasFactory ,SoftDeletes;
    protected $fillable = [
        'room_id'
        ,'room_service_id'
        ,'reservation_id'
        ,'employee_id'
        ,'notes_en'
        ,'notes_ar'
    ];
    public function Roomservice()
    {
        return $this->belongsTo(Roomservice::class);
    }
}
