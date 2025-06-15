<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ioc extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'stake_price', 'raised_price', 'sold_allocation', 
    'currency',
    'days',
    'hours',
    'minutes',
    'seconds',
    'post_countdown_price',

];

}
