<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
    */
    public function run()
    {
        DB::table('question_items')->insert(array (
  0 => 
  array (
    'id' => 1,
    'title' => 'For existing clients',
    'description' => '<p>If you already have an account please sign in and use our ticket system</p>',
    'link_text' => 'Get 24/7 Support',
    'link' => 'login',
    'icon' => 'images/existing-client-icon.svg',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1 => 
  array (
    'id' => 2,
    'title' => 'For new clients',
    'description' => '<p>Please leave your enquiry and our Business Development
                team will contact you shortly</p>',
    'link_text' => 'Contact BD team',
    'link' => 'http://peeneticsbe.test/contact-us',
    'icon' => 'images/new-client-icon.svg',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
));
    }
}
