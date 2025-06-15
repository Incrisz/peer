<?php

namespace Database\Seeders;

use App\Models\Together;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TogetherSeeder extends Seeder
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
                'title' => "Partner",
                'button_text' => 'Become A Partner',
                'link' => 'login',
                'description' => 'Together, we’ll generate more brand exposure, increase the number of active token holders and drive growth',
            ],
        ];
        Together::insert($data);
    }
}
