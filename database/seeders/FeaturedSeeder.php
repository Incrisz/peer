<?php

namespace Database\Seeders;

use App\Models\Featured;
use Illuminate\Database\Seeder;

class FeaturedSeeder extends Seeder
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
                'title' => 'blomberg',
                'image' => 'images/featured/bloombergnn.png'
            ],
            [
                'title' => 'crypto',
                'image' => 'images/featured/cryptonn.png'
            ],
            [
                'title' => 'marketWatch',
                'image' => 'images/featured/marketwatchnn.png'
            ],
            [
                'title' => 'benzinga',
                'image' => 'images/featured/benzingnn.png'
            ],
            [
                'title' => 'Digital Journal',
                'image' => 'images/featured/dgn.png'
            ],
            [
                'title' => 'MorningStar',
                'image' => 'images/featured/morningstarnn.png',
            ],
            [
                'title' => 'Yahoo Finance',
                'image' => 'images/featured/yahoo-financen.png',
            ],
            [
                'title' => 'Street Insider',
                'image' => 'images/featured/sinn.png',
            ],
        ];
       foreach ($data as $da ) {
         Featured::updateOrCreate(['title' => $da['title'] ] , $da);
       }
    }
}
