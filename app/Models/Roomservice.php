<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Roomservice extends Model
{
    use HasFactory ,SoftDeletes;
    protected $fillable = [
        'name_en'
        ,'name_ar'
        ,'description_en'
        ,'description_ar'
        ,'status_en'
        ,'status_ar'
        ,'price'
    ];

}
