<?php

namespace Database\Seeders;

use App\Models\HomeSectioniv;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomeSectionivSeeder extends Seeder
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
                'title' => 'Seamless Integrations',
                'description' => 'Swiftly integrate Peernetics with other platforms you use.',
            ],
            [
                'title' => 'User-Friendly Interface',
                'description' => 'A system built for everyone to easily use. Even
                beginners.',
            ],
            [
                'title' => 'Global Crypto Payments',
                'description' => 'Instantly accept payments from people around the world.',
            ],
            [
                'title' => '100+ Digital Currencies',
                'description' => 'Accept payments in all of the most popular
                cryptocurrencies.',
            ],
            [
                'title' => 'Fraud Prevention Features',
                'description' => 'Crypto payments are irreversible, so there are no
                chargebacks.',
            ],
            [
                'title' => 'Ultra Low Fees',
                'description' => 'Fees ranging from 0.5% - 1% on all transactions.',
            ],
        ];

        HomeSectioniv::insert($data);
    }
}
