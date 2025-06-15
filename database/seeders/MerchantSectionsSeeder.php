<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MerchantSectionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
    */
    public function run()
    {
        DB::table('merchant_sections')->insert(array (
  0 => 
  array (
    'id' => 1,
    'title' => 'Become a Merchant Partner Today',
    'description' => 'Sign up to Peernetics and exponentially accelerate the next phase of your
                business’s growth.',
    'button_text' => 'Merchant Partner Program',
    'link' => 'http://peeneticsbe.test/merchant-program',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
));
    }
}
