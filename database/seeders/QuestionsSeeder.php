<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
    */
    public function run()
    {
        DB::table('questions')->insert(array (
  0 => 
  array (
    'id' => 1,
    'title' => '<p>Have a <span data-animated="fadeInUp">question?</span></p>',
    'description' => '<p class=\'font18\'>Have a question? Head over to our FAQ
                or<br>reach out to us via our ticket system or<br>contact form.
                We\'re here to help!
            </p>',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
));
    }
}
