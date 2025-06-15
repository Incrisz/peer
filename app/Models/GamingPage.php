<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GamingPage extends Model
{
    use HasFactory;

    protected $fillable = [
        'texti',
        'textii',
        'hero_text',
        'google_store_link',
        'apple_store_link',
        'image',
    ];
}
