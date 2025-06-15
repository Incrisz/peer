<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
    */
    public function run()
    {
        DB::table('sections')->insert(array (
  0 => 
  array (
    'id' => 1,
    'name' => 'Banner',
    'page_id' => 1,
    'position' => 1,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1 => 
  array (
    'id' => 2,
    'name' => 'Section 2',
    'page_id' => 1,
    'position' => 2,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  2 => 
  array (
    'id' => 3,
    'name' => 'Section 3',
    'page_id' => 1,
    'position' => 3,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  3 => 
  array (
    'id' => 4,
    'name' => 'Section 4',
    'page_id' => 1,
    'position' => 4,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  4 => 
  array (
    'id' => 5,
    'name' => 'Section 5',
    'page_id' => 1,
    'position' => 5,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  5 => 
  array (
    'id' => 6,
    'name' => 'Blogs',
    'page_id' => 1,
    'position' => 6,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  6 => 
  array (
    'id' => 7,
    'name' => 'Featured On',
    'page_id' => 1,
    'position' => 7,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  7 => 
  array (
    'id' => 8,
    'name' => 'Section 8',
    'page_id' => 1,
    'position' => 8,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
));
    }
}
