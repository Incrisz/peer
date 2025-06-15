<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
    */
    public function run()
    {
        DB::table('data_types')->insert(array (
  0 => 
  array (
    'id' => 1,
    'name' => 'users',
    'slug' => 'users',
    'display_name_singular' => 'User',
    'display_name_plural' => 'Users',
    'icon' => 'voyager-person',
    'model_name' => 'Modules\\Admin\\Models\\User',
    'policy_name' => 'Modules\\Admin\\Policies\\UserPolicy',
    'controller' => 'Modules\\Admin\\Http\\Controllers\\VoyagerUserController',
    'description' => '',
    'generate_permissions' => 1,
    'server_side' => 0,
    'details' => NULL,
    'created_at' => '2024-07-04 10:13:28',
    'updated_at' => '2024-07-04 10:13:28',
  ),
  1 => 
  array (
    'id' => 2,
    'name' => 'menus',
    'slug' => 'menus',
    'display_name_singular' => 'Menu',
    'display_name_plural' => 'Menus',
    'icon' => 'voyager-list',
    'model_name' => 'Modules\\Admin\\Models\\Menu',
    'policy_name' => NULL,
    'controller' => '',
    'description' => '',
    'generate_permissions' => 1,
    'server_side' => 0,
    'details' => NULL,
    'created_at' => '2024-07-04 10:13:28',
    'updated_at' => '2024-07-04 10:13:28',
  ),
  2 => 
  array (
    'id' => 3,
    'name' => 'roles',
    'slug' => 'roles',
    'display_name_singular' => 'Role',
    'display_name_plural' => 'Roles',
    'icon' => 'voyager-lock',
    'model_name' => 'Modules\\Admin\\Models\\Role',
    'policy_name' => NULL,
    'controller' => 'Modules\\Admin\\Http\\Controllers\\VoyagerRoleController',
    'description' => '',
    'generate_permissions' => 1,
    'server_side' => 0,
    'details' => NULL,
    'created_at' => '2024-07-04 10:13:28',
    'updated_at' => '2024-07-04 10:13:28',
  ),
));
    }
}
