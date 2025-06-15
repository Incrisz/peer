<?php

namespace Database\Seeders;

use App\Models\Exclusive;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExclusiveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                "title" => "Exclusive Rewards for Holders",
                "description" => '<p>Want to get exclusive rewards and offers at some of the best hospitality
                establishments, restaurants, retailers and more? Anyone holding 200 PNS
                or more will be automatically entered into our rewards program, and you
                can start claiming rewards in-store and online.</p>
            <a href="loyalty-program" class="primary-btn plr">The Loyalty
                Program</a>'
            ]
        ];

        Exclusive::insert($data);
    }
}
