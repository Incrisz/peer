<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SitePagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
    */
//     public function run()
//     {
//         DB::table('site_pages')->insert(array (
//   0 => 
//   array (
//     'id' => 1,
//     'name' => 'Home',
//     'created_at' => NULL,
//     'updated_at' => NULL,
//   ),
//   1 => 
//   array (
//     'id' => 2,
//     'name' => 'About',
//     'created_at' => NULL,
//     'updated_at' => NULL,
//   ),
//   2 => 
//   array (
//     'id' => 3,
//     'name' => 'Road Maps',
//     'created_at' => NULL,
//     'updated_at' => NULL,
//   ),
//   3 => 
//   array (
//     'id' => 4,
//     'name' => 'Partners',
//     'created_at' => NULL,
//     'updated_at' => NULL,
//   ),
//   // 4 => 
//   // array (
//   //   'id' => 5,
//   //   'name' => 'Merchants',
//   //   'created_at' => NULL,
//   //   'updated_at' => NULL,
//   // ),
//   5 => 
//   array (
//     'id' => 6,
//     'name' => 'Payment Gateway',
//     'created_at' => NULL,
//     'updated_at' => NULL,
//   ),
//   6 => 
//   array (
//     'id' => 7,
//     'name' => 'Pns Token',
//     'created_at' => NULL,
//     'updated_at' => NULL,
//   ),
//   7 => 
//   array (
//     'id' => 8,
//     'name' => 'Loyalty Program',
//     'created_at' => NULL,
//     'updated_at' => NULL,
//   ),
//   8 => 
//   array (
//     'id' => 9,
//     'name' => 'Merchant Program',
//     'created_at' => NULL,
//     'updated_at' => NULL,
//   ),
//   9 => 
//   array (
//     'id' => 10,
//     'name' => 'Faqs',
//     'created_at' => NULL,
//     'updated_at' => NULL,
//   ),
//   10 => 
//   array (
//     'id' => 11,
//     'name' => 'Ioc Pre-sale',
//     'created_at' => NULL,
//     'updated_at' => NULL,
//   ),
//   11 => 
//   array (
//     'id' => 12,
//     'name' => 'Gaming Program',
//     'created_at' => NULL,
//     'updated_at' => NULL,
//   ),
// ));
//     }

public function run()
{
    $pages = [
        ['id' => 1, 'name' => 'Home', 'created_at' => null, 'updated_at' => null],
        ['id' => 2, 'name' => 'About', 'created_at' => null, 'updated_at' => null],
        ['id' => 3, 'name' => 'Road Maps', 'created_at' => null, 'updated_at' => null],
        ['id' => 4, 'name' => 'Partners', 'created_at' => null, 'updated_at' => null],
        ['id' => 6, 'name' => 'Payment Gateway', 'created_at' => null, 'updated_at' => null],
        ['id' => 7, 'name' => 'Pns Token', 'created_at' => null, 'updated_at' => null],
        ['id' => 8, 'name' => 'Loyalty Program', 'created_at' => null, 'updated_at' => null],
        ['id' => 9, 'name' => 'Merchant Program', 'created_at' => null, 'updated_at' => null],
        ['id' => 10, 'name' => 'Faqs', 'created_at' => null, 'updated_at' => null],
        ['id' => 11, 'name' => 'Ioc Pre-sale', 'created_at' => null, 'updated_at' => null],
        ['id' => 12, 'name' => 'Gaming Program', 'created_at' => null, 'updated_at' => null],
    ];

    DB::table('site_pages')->insertOrIgnore($pages);
}

}
