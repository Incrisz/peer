<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AllocationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
    */
    public function run()
    {
        DB::table('allocations')->insert(array (
  0 => 
  array (
    'id' => 1,
    'allocation' => 'Public Ico Sale',
    'perentage' => 10,
    'token_amount' => 100000000,
    'vesting_period' => 'TGE 15%, 3 months lock, then 5% each month (20 months in total)',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1 => 
  array (
    'id' => 2,
    'allocation' => 'Team',
    'perentage' => 10,
    'token_amount' => 100000000,
    'vesting_period' => 'TGE 0%, 12 months lock, then 25% every 3 months (22 months in total)',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  2 => 
  array (
    'id' => 3,
    'allocation' => 'Marketing',
    'perentage' => 6,
    'token_amount' => 600000000,
    'vesting_period' => 'TGE 0%, 3 months lock, then 20% every 3 months (16 months in total)',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  3 => 
  array (
    'id' => 4,
    'allocation' => 'Research & Development',
    'perentage' => 4,
    'token_amount' => 400000000,
    'vesting_period' => 'TGE 0%, 3 months lock, then 20% every 3 months (16 months in total)',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  4 => 
  array (
    'id' => 5,
    'allocation' => 'Public Sale',
    'perentage' => 70,
    'token_amount' => 7000000000,
    'vesting_period' => 'Not Applicable',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
));
    }
}
