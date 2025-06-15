<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamHeadersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
    */
    public function run()
    {
        DB::table('team_headers')->insert(array (
  0 => 
  array (
    'id' => 1,
    'title' => 'The Peernetics Team',
    'description' => 'Meet the team behind the cryptocurrency payment gateway that will skyrocket the growth of your business.',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
));
    }
}
