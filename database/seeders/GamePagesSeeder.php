<?php

namespace Database\Seeders;

use App\Models\GamingPage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GamePagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gaming = [
            [
               
                'id' => 1,
                'texti' => 'Welcome to',
                'textii' => 'The #1 Gaming Club For Gamers',
                'hero_text' => 'PNS token holders, discover games you’ll love, connect your wallet, play to earn or play to win, withdrawn your PNS tokens.',
                'google_store_link' => 'http://company-web.test/gaming-club',
                'apple_store_link' => 'http://company-web.test/gaming-club',
                'image' => 'sites/default/files/css/gaming-folder/PNS-Banner-new_1-removebg.png',
            ]

            ];

        DB::table('gaming_pages')->insertOrIgnore($gaming);
    }
}
