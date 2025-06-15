<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;
    protected $fillable = ["name", "page_id", "position"];

    public function pages()
    {
        $this->belongsTo(SitePage::class, 'page_id');
    }
}
