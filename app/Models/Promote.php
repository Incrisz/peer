<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promote extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'button_text',
        'link',
        'description'
    ];
}
