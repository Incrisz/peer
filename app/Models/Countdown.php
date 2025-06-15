<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Countdown extends Model
{
    use HasFactory;

    protected $fillable = [
        'days',
        'hours',
        'minutes',
        'seconds',
        'post_countdown_price',
        'currency',
        'id',
    ];

}
