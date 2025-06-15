<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PNSTokenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pns_token')->insert([
            [
                'id' => 1,
                'ico_button_text' => 'BUY PNS',
                'ico_button_url' => 'https://peernetics.io/',
                'white_paper_button_text' => 'Whitepaper',
                'white_paper' => 'sites/default/files/2024-03/Whitepaper%20V2_0.pdf',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}