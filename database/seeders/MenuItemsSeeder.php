<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
    */
    public function run()
    {
        DB::table('menu_items')->insert(array (
  0 => 
  array (
    'id' => 1,
    'menu_id' => 1,
    'title' => 'Dashboard',
    'url' => '',
    'target' => '_self',
    'icon_class' => 'voyager-boat',
    'color' => NULL,
    'parent_id' => NULL,
    'order' => 1,
    'created_at' => '2024-07-04 10:13:28',
    'updated_at' => '2024-07-04 10:13:28',
    'route' => 'voyager.dashboard',
    'parameters' => NULL,
  ),
  1 => 
  array (
    'id' => 2,
    'menu_id' => 1,
    'title' => 'Media',
    'url' => '',
    'target' => '_self',
    'icon_class' => 'voyager-images',
    'color' => NULL,
    'parent_id' => NULL,
    'order' => 5,
    'created_at' => '2024-07-04 10:13:28',
    'updated_at' => '2024-07-04 10:13:28',
    'route' => 'voyager.media.index',
    'parameters' => NULL,
  ),
  2 => 
  array (
    'id' => 3,
    'menu_id' => 1,
    'title' => 'Users',
    'url' => '',
    'target' => '_self',
    'icon_class' => 'voyager-person',
    'color' => NULL,
    'parent_id' => NULL,
    'order' => 3,
    'created_at' => '2024-07-04 10:13:28',
    'updated_at' => '2024-07-04 10:13:28',
    'route' => 'voyager.users.index',
    'parameters' => NULL,
  ),
  3 => 
  array (
    'id' => 4,
    'menu_id' => 1,
    'title' => 'Roles',
    'url' => '',
    'target' => '_self',
    'icon_class' => 'voyager-lock',
    'color' => NULL,
    'parent_id' => NULL,
    'order' => 2,
    'created_at' => '2024-07-04 10:13:28',
    'updated_at' => '2024-07-04 10:13:28',
    'route' => 'voyager.roles.index',
    'parameters' => NULL,
  ),
  4 => 
  array (
    'id' => 5,
    'menu_id' => 1,
    'title' => 'Tools',
    'url' => '',
    'target' => '_self',
    'icon_class' => 'voyager-tools',
    'color' => NULL,
    'parent_id' => NULL,
    'order' => 9,
    'created_at' => '2024-07-04 10:13:28',
    'updated_at' => '2024-07-04 10:13:28',
    'route' => NULL,
    'parameters' => NULL,
  ),
  5 => 
  array (
    'id' => 6,
    'menu_id' => 1,
    'title' => 'Menu Builder',
    'url' => '',
    'target' => '_self',
    'icon_class' => 'voyager-list',
    'color' => NULL,
    'parent_id' => 5,
    'order' => 10,
    'created_at' => '2024-07-04 10:13:28',
    'updated_at' => '2024-07-04 10:13:28',
    'route' => 'voyager.menus.index',
    'parameters' => NULL,
  ),
  6 => 
  array (
    'id' => 7,
    'menu_id' => 1,
    'title' => 'Database',
    'url' => '',
    'target' => '_self',
    'icon_class' => 'voyager-data',
    'color' => NULL,
    'parent_id' => 5,
    'order' => 11,
    'created_at' => '2024-07-04 10:13:28',
    'updated_at' => '2024-07-04 10:13:28',
    'route' => 'voyager.database.index',
    'parameters' => NULL,
  ),
  7 => 
  array (
    'id' => 8,
    'menu_id' => 1,
    'title' => 'Compass',
    'url' => '',
    'target' => '_self',
    'icon_class' => 'voyager-compass',
    'color' => NULL,
    'parent_id' => 5,
    'order' => 12,
    'created_at' => '2024-07-04 10:13:28',
    'updated_at' => '2024-07-04 10:13:28',
    'route' => 'voyager.compass.index',
    'parameters' => NULL,
  ),
  8 => 
  array (
    'id' => 9,
    'menu_id' => 1,
    'title' => 'BREAD',
    'url' => '',
    'target' => '_self',
    'icon_class' => 'voyager-bread',
    'color' => NULL,
    'parent_id' => 5,
    'order' => 13,
    'created_at' => '2024-07-04 10:13:28',
    'updated_at' => '2024-07-04 10:13:28',
    'route' => 'voyager.bread.index',
    'parameters' => NULL,
  ),
  9 => 
  array (
    'id' => 10,
    'menu_id' => 1,
    'title' => 'Settings',
    'url' => '',
    'target' => '_self',
    'icon_class' => 'voyager-settings',
    'color' => NULL,
    'parent_id' => NULL,
    'order' => 14,
    'created_at' => '2024-07-04 10:13:28',
    'updated_at' => '2024-07-04 10:13:28',
    'route' => 'voyager.settings.index',
    'parameters' => NULL,
  ),
  10 => 
  array (
    'id' => 11,
    'menu_id' => 1,
    'title' => 'Contact',
    'url' => 'http://peeneticsbe.test/admin/contacts',
    'target' => '_self',
    'icon_class' => 'voyager-people',
    'color' => NULL,
    'parent_id' => NULL,
    'order' => 16,
    'created_at' => '2024-07-04 10:13:28',
    'updated_at' => '2024-07-04 10:13:28',
    'route' => NULL,
    'parameters' => NULL,
  ),
  11 => 
  array (
    'id' => 12,
    'menu_id' => 1,
    'title' => 'Site Builder',
    'url' => 'http://peeneticsbe.test/admin/pages',
    'target' => '_self',
    'icon_class' => 'voyager-news',
    'color' => NULL,
    'parent_id' => NULL,
    'order' => 17,
    'created_at' => '2024-07-04 10:13:28',
    'updated_at' => '2024-07-04 10:13:28',
    'route' => NULL,
    'parameters' => NULL,
  ),
));
    }
}
