<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageContent extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'content',
    ];

    public function getContent($name){
        return $this->where('name', $name)->first()['content'];
    }
}
