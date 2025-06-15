<?php

namespace Database\Seeders;

use App\Models\Extensive;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExtensiveSeeder extends Seeder
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
                "title" => "Extensive Marketing Efforts You’ll Benefit From",
                "description" => "Our marketing strategy encompasses promoting all of our brand partners. As part of that process, your brand will be integrated into our marketing communications, including:",
            ]
        ];
        Extensive::insert($data);
    }
}
