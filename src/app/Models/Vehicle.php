<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;
    protected $table = 'vehicle';

    protected $fillable = [
        'model', 'yearmodel', 'yearmanufacture', 'price', 'type', 'photo', 'brand_id', 'color_id', 'user_id', 'optionals'
    ];
}
