<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'slug', 'featured_image', 'content', 'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
