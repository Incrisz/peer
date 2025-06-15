<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExclusivesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
    */
    public function run()
    {
        DB::table('exclusives')->insert(array (
  0 => 
  array (
    'id' => 1,
    'title' => 'Exclusive Rewards for Holders',
    'description' => '<p>Want to get exclusive rewards and offers at some of the best hospitality
                establishments, restaurants, retailers and more? Anyone holding 200 PNS
                or more will be automatically entered into our rewards program, and you
                can start claiming rewards in-store and online.</p>
            <a href="loyalty-program" class="primary-btn plr">The Loyalty
                Program</a>',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
));
    }
}
