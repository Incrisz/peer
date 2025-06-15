<?php

namespace Database\Seeders;

use App\Models\Mass;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MassSeeder extends Seeder
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
                'title' => "The Mass-Adoption Mission",
                'button_text' => 'About Us',
                'link' => 'about',
                'description' => "At Peernetics, we’re on a mission to make cryptocurrency adoption as easy as possible for businesses and consumers. We believe in breaking down barriers, so we’ve introduced low fees, simple user interfaces and on-hand support. Everyone deserves the right to accept payments in crypto, and we’re making it possible.",
                'image' => 'sites/default/files/2023-07/mass-adoption.png',
            ],
        ];
        Mass::insert($data);
    }
}
