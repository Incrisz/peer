<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSecondsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
    */
    public function run()
    {
        DB::table('about_seconds')->insert(array (
  0 => 
  array (
    'id' => 1,
    'title' => 'About Peernetics',
    'sub_text' => 'Together, we can unlock the power of
                cryptocurrency and transform your
                business',
    'button_text' => 'Learn More',
    'link_url' => 'http://peeneticsbe.test/cryptocurrency-payment-gateway',
    'description' => 'Founded by a team of passionate
                professionals, we seek to make it as
                easy as possible for all businesses to
                step into the world of cryptocurrency.
                We break down barriers to entry by
                taking ground-breaking and confusing
                technology and transforming it into an
                uncomplicated and user-friendly
                cryptocurrency payment gateway.',
    'image' => 'images/about/about-right-bnr_0.png',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
));
    }
}
