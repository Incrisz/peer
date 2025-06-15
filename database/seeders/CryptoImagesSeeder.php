<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CryptoImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
    */
    public function run()
    {
        DB::table('crypto_images')->insert(array (
  0 => 
  array (
    'id' => 1,
    'title' => 'computer',
    'image' => 'images/crypto/computer.png',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
));
    }
}
