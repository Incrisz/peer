<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
    */
    public function run()
    {
        DB::table('brands')->insert(array (
  0 => 
  array (
    'id' => 1,
    'title' => 'Brand Promotion',
    'description' => 'One of the major selling points of Peernetics is the amazing brand partnerships we secure. Honestly, we’ll never stop shouting about it. So, that means you’ll get a ton of free marketing and the opportunity to showcase your brand to an engaged and highly active community.',
    'image' => 'images/merchant/brand-promotion.png',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
));
    }
}
