<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GamingSection extends Model
{
    use HasFactory;

    protected $fillable = ["title", "btn_name", "btn_link", "description", "mobile_image", "desktop_image"];
}
