<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use spatie\Translatable;
use Spatie\Translatable\HasTranslations;

class Roomservice extends Model
{
    use HasFactory ,SoftDeletes,HasTranslations;
    protected $fillable = [
        'name',
        'description',
        'status',
        'price',
    ];

    public $translatable = ['name', 'description'];

}
