<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'middle_text',
        'subtitle',
        'loyalty_button_text',
        'ico_button_text',
        'loyalty_button_url',
        'ico_button_url',
        'images',
    ];
}
