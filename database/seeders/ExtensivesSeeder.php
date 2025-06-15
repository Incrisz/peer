<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExtensivesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
    */
    public function run()
    {
        DB::table('extensives')->insert(array (
  0 => 
  array (
    'id' => 1,
    'title' => 'Extensive Marketing Efforts You’ll Benefit From',
    'description' => 'Our marketing strategy encompasses promoting all of our brand partners. As part of that process, your brand will be integrated into our marketing communications, including:',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
));
    }
}
