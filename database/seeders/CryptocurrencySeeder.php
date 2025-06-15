<?php

namespace Database\Seeders;

use App\Models\Cryptocurrency;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CryptocurrencySeeder extends Seeder
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
                "title" => "Cryptocurrency Payment Gateway",
                "description" => "Discover a fast-growing new source of income for your business. Implement the best cryptocurrency payment gateway to enable your business to accept, exchange, withdraw, send, store and receive crypto payments.",
            ]
        ];
        Cryptocurrency::insert($data);
    }
}
