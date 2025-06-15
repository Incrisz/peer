<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoyaltyProgramsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
    */
    public function run()
    {
        DB::table('loyalty_programs')->insert(array (
  0 => 
  array (
    'id' => 1,
    'title' => 'Loyalty Program',
    'description' => 'At Peernetics, we reward our token holders. Hold just 200 PNS, and you will automatically be entered to receive exclusive benefits with our merchant partners.',
    'image' => 'images/loyalty/token-bnr.png',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
));
    }
}
