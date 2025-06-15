<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IocTimer extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'time',
        'post_countdown_price'
    ];
}
