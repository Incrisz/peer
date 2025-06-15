<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
    */
    public function run()
    {
        DB::table('roles')->insert(array (
  0 => 
  array (
    'id' => 1,
    'name' => 'admin',
    'display_name' => 'Administrator',
    'created_at' => '2024-07-04 10:13:28',
    'updated_at' => '2024-07-04 10:13:28',
  ),
  1 => 
  array (
    'id' => 2,
    'name' => 'company',
    'display_name' => 'voyager::seeders.roles.company',
    'created_at' => '2024-07-04 10:13:28',
    'updated_at' => '2024-07-04 10:13:28',
  ),
  2 => 
  array (
    'id' => 3,
    'name' => 'storeadmin',
    'display_name' => 'voyager::seeders.roles.store',
    'created_at' => '2024-07-04 10:13:28',
    'updated_at' => '2024-07-04 10:13:28',
  ),
  3 => 
  array (
    'id' => 4,
    'name' => 'user',
    'display_name' => 'Normal User',
    'created_at' => '2024-07-04 10:13:28',
    'updated_at' => '2024-07-04 10:13:28',
  ),
));
    }
}
