<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TogethersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
    */
    public function run()
    {
        DB::table('togethers')->insert(array (
  0 => 
  array (
    'id' => 1,
    'title' => 'Partner',
    'button_text' => 'Become A Partner',
    'link' => 'login',
    'description' => 'Together, we’ll generate more brand exposure, increase the number of active token holders and drive growth',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
));
    }
}
