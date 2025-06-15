<?php

namespace Database\Seeders;

use App\Models\HomeSectioniii;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomeSectioniiiSeeder extends Seeder
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
                'texti' => 'Accept Crypto',
            ],

            [
                'textii' => 'Safe',
            ],

            [
                'textiii' => 'and',
            ],

            [
                'textiv' => 'Securely',
            ],

            [
                'textv' => 'with',
            ],

            [
                'textvi' => 'Peernetics',
            ],

            [
                'image' => 'sites/default/files/2023-09/peernetics-dashnoard.png',
            ],




        ];
        HomeSectioniii::insert($data);
    }
}
