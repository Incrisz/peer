<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PromoteBussinessesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
    */
    public function run()
    {
        DB::table('promote_bussinesses')->insert(array (
  0 => 
  array (
    'id' => 1,
    'title' => 'Promote your business with Peernetics',
    'button_text' => 'Learn More',
    'link' => 'merchant-marketing-service',
    'description' => '
                Increase brand awareness and attract more customers to your business. Peernetics Marketing Service showcases your products and services to active and interested cryptocurrency buyers, allowing you to increase the new revenue stream you have established.
                ',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
));
    }
}
