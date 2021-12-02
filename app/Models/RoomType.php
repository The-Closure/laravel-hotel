<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class RoomType extends Model
{
    use HasFactory, SoftDeletes, HasTranslations;

    public $translatable = ['description', 'name'];
    protected $fillable =[
        'name',
        'price',
        'description',
        ];

    public function rooms()
    {
        return $this->hasMany(Room::class);
    }
}
