<?php

namespace Database\Seeders;

use App\Models\TeamHeader;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamHeaderSeeder extends Seeder
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
                'title' => 'The Peernetics Team',
                'description' => "Meet the team behind the cryptocurrency payment gateway that will skyrocket the growth of your business.",
            ],

        ];

        TeamHeader::insert($data);
    }
}
