<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutSecond extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'sub_text', 'button_text', 'link_url', 'image'];
}
