<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TargetMarketsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
    */
    public function run()
    {
        DB::table('target_markets')->insert(array (
  0 => 
  array (
    'id' => 1,
    'title' => 'Targeted Marketing',
    'button_text' => 'Sign Up Now',
    'link' => 'login',
    'description' => '
                Marketing budgets are the biggest expense in a business\'s finances.
                                                Choose<strong> </strong>from our range of cost-effective
                                                    marketing packages,<strong> </strong>we will place your
                                                brand&nbsp; to the ideal target audience. Just sign up, upload your
                                                marketing materials and we\'ll do the rest.
                ',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
));
    }
}
