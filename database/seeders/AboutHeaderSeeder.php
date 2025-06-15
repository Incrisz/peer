<?php

namespace Database\Seeders;

use App\Models\AboutHeader;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutHeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            [
                "title" => "About Peernetics",
                "description" => "Peernetics exists to enable the mass adoption
                of cryptocurrency payments. Through
                optimised cryptocurrency payment solutions,
                Peernetics empowers businesses to accept,
                exchange, withdraw, send, store and receive
                cryptocurrencies.",
                "image" => "images/about/about-left-bnr.png",
            ],
        ];
        AboutHeader::insert($data);
    }
}
