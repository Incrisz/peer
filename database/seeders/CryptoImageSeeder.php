<?php

namespace Database\Seeders;

use App\Models\CryptoImage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CryptoImageSeeder extends Seeder
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
                "title" => "computer",
                "image" => "images/crypto/computer.png",
            ]
        ];
        CryptoImage::insert($data);
    }
}
