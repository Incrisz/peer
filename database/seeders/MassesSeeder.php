<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MassesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
    */
    public function run()
    {
        DB::table('masses')->insert(array (
  0 => 
  array (
    'id' => 1,
    'title' => 'The Mass-Adoption Mission',
    'button_text' => 'About Us',
    'link' => 'about',
    'description' => 'At Peernetics, we’re on a mission to make cryptocurrency adoption as easy as possible for businesses and consumers. We believe in breaking down barriers, so we’ve introduced low fees, simple user interfaces and on-hand support. Everyone deserves the right to accept payments in crypto, and we’re making it possible.',
    'image' => 'sites/default/files/2023-07/mass-adoption.png',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
));
    }
}
