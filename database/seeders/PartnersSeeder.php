<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartnersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
    */
    public function run()
    {
        DB::table('partners')->insert(array (
  0 => 
  array (
    'id' => 1,
    'title' => 'polygon',
    'image' => 'images/partner/p.png',
    'created_at' => NULL,
    'updated_at' => '2024-07-09 13:43:37',
  ),
  1 => 
  array (
    'id' => 2,
    'title' => 'Aws Logo',
    'image' => 'images/partner/aws.png',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  2 => 
  array (
    'id' => 3,
    'title' => 'safe',
    'image' => 'images/partner/safe.png',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  3 => 
  array (
    'id' => 4,
    'title' => 'solid',
    'image' => 'images/partner/solid.png',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  4 => 
  array (
    'id' => 5,
    'title' => 'Mis',
    'image' => 'images/partner/Mistech logo (1).png',
    'created_at' => NULL,
    'updated_at' => '2024-07-09 13:41:32',
  ),
));
    }
}
