<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vehicle extends Model
{
    use SoftDeletes;
    protected $table = 'vehicle';

    protected $fillable = [
        'model', 'yearmodel', 'yearmanufacture', 'price', 'type', 'photo', 'brand_id', 'color_id', 'user_id', 'optionals'
    ];
}
