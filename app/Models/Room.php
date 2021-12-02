<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Room extends Model
{
    use HasFactory, HasTranslations;

    public $translatable = ['description', 'status'];
    protected $fillable = [
        'number',
        'beds',
        'price',
        'story',
        'description',
        'status',
        'room_type_id'];

    public function roomTybe()
    {
        return $this->belongsTo(RoomType::class);
    }

    public function roomServiceRequests()
    {
        return $this->hasMany(RoomServiceRequests::class);
    }
}
