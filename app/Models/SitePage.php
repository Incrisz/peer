<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SitePage extends Model
{
    use HasFactory;
    protected $fillable = ["name"];

    public function section()
    {
        $this->hasMany(Section::class);
    }


    public function contents()
    {
        return $this->hasMany(PageContent::class, 'page_id');
    }


    public function getContent($name){
        return $this->contents->where('name', $name)->first()['content'] ?? null;
    }

}
