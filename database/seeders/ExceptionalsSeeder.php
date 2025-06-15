<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExceptionalsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
    */
    public function run()
    {
        DB::table('exceptionals')->insert(array (
  0 => 
  array (
    'id' => 1,
    'title' => 'With exceptionally low fees and impressively user-friendly interfaces Peernetics makes it easy for any business to get started with crypto.',
    'description' => 'With exceptionally low fees and impressively user-friendly interfaces Peernetics makes it easy for any business to get started with crypto.',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
));
    }
}
