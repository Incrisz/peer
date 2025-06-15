<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PnsToken extends Model
{
    use HasFactory;

      // Specify the table name
      protected $table = 'pns_token';
    protected $fillable = [
        'ico_button_text',
        'ico_button_url',
        'white_paper_button_text',
        'white_paper',
    ];
}
