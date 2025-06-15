<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IocPresale extends Model
{
    use HasFactory;


    protected $fillable= [

        'ioc_token_price',
        'token_address',
        'presale_address'
    ];
}
