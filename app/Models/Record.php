<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    use HasFactory;
    protected $fillable = [
        'supplier', 'wholesaler', 'steering_type', 'car_model', 'car_sfx', 'car_variant', 'color', 'month',
    ];
}
