<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
    */
    public function run()
    {
        DB::table('teams')->insert(array (
  0 => 
  array (
    'id' => 1,
    'name' => 'Nazir Miah',
    'job_desc' => 'Founder & CEO',
    'link' => 'https://www.linkedin.com/in/nazir-miah-007858a8/',
    'image' => 'images/about/nazir.png',
    'socials' => 'images/about/team/linkin.png',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1 => 
  array (
    'id' => 2,
    'name' => 'Jallal Uddin',
    'job_desc' => 'Founder & BDM',
    'link' => 'https://www.linkedin.com/in/jay-peernetics-110856274/',
    'image' => 'images/about/jallai.png',
    'socials' => 'images/about/team/linkin.png',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  2 => 
  array (
    'id' => 3,
    'name' => 'Kamile Macijauskaite',
    'job_desc' => 'Marketing Manager',
    'link' => 'https://www.linkedin.com/in/kim-peernetics-35267a273/',
    'image' => 'images/about/kamile.png',
    'socials' => 'images/about/team/linkin.png',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  3 => 
  array (
    'id' => 4,
    'name' => 'Shamim Miah',
    'job_desc' => 'Community Manager',
    'link' => 'https://www.linkedin.com/in/shamim-miah-49bbaa1a2/',
    'image' => 'images/about/shamim.png',
    'socials' => 'images/about/team/linkin.png',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  4 => 
  array (
    'id' => 5,
    'name' => 'Ejeh Michael Marvelous',
    'job_desc' => 'Developer Relations',
    'link' => 'https://www.linkedin.com/in/ejeh-micheal-marvelous-6735711b6/',
    'image' => 'images/about/ejeh.png',
    'socials' => 'images/about/team/linkin.png',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
));
    }
}
