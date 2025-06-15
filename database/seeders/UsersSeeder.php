<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
    */
    public function run()
    {
        DB::table('users')->insert(array (
  0 => 
  array (
    'id' => 1,
    'role_id' => 1,
    'name' => 'Admin',
    'email' => 'admin@admin.com',
    'avatar' => 'users/default.png',
    'email_verified_at' => NULL,
    'password' => '$2y$10$1KMmkE0sqUO.0Kf6z7WwX.Xk08cPJ.lM/03vohLJq0CFXNDFSmVvy',
    'remember_token' => 'x8k90kSFxTiiaBnWv9KYcVXjywAy7CUV0MQOXz0h4qES8aH5vmGCWBwSRGYi',
    'settings' => NULL,
    'created_at' => '2024-07-04 10:13:28',
    'updated_at' => '2024-07-04 10:13:28',
  ),
));
    }
}
