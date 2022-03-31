<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'manufactured_date',
        'name',
        'manufacture',
        'price',
        'description'
    ];

    protected $dates = [
        'manufactured_date'
    ];

    // public static function boot()
    // {
    //     self::boot();

    //     self::created(function($model) {
    //         $model->uuid = Str::uuid();
    //     });
    // }
}
