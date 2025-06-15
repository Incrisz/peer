<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoadMapsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
    */
    public function run()
    {
        DB::table('road_maps')->insert(array (
  0 => 
  array (
    'id' => 1,
    'title' => 'Q4 2022 & Q2 2023',
    'description' => '<li>Website VI</li>
                <li>Whitepaper V1 release</li>
                <li>World Travel Market</li>
                <li>Smart Contract Development</li>
                <li>Design Web3 Merchant Portal</li>',
    'created_at' => NULL,
    'updated_at' => '2024-07-04 10:17:26',
  ),
  1 => 
  array (
    'id' => 2,
    'title' => 'Q3 2023',
    'description' => '
                <li>Website V2</li>
                <li>Development of Web3 Merchant Portal</li>
                <li>Design Payment Gateway</li>
                <li>Smart Contract Deployment</li>
                <li>SolidProof Audit</li>
                <li>PR Release</li>',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  2 => 
  array (
    'id' => 3,
    'title' => 'Q4 2023',
    'description' => '
                <li>ICO launch</li>
                <li>Whitepaper V2</li>
                <li>Onboarding Partners</li>
                <li>Testing Merchant Portal</li>',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  3 => 
  array (
    'id' => 4,
    'title' => 'Q1 2024',
    'description' => '
                <li>Public Sale</li>
                <li>CoinMarketCap &amp; CoinGecko Listing</li>
                <li>Onboarding Merchant Partners</li>
                <li>Merchant Marketing Services</li>
                <li>Development of Payment Gateway</li>
                <li>Team expansion</li>
                <li>Onboarding NFT and Metaverse Projects</li>',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  4 => 
  array (
    'id' => 5,
    'title' => 'Q2 2024 - Future',
    'description' => '
                <li>Testing Payment Gateway</li>
                <li>VC Funding</li>
                <li>Exchange Development</li>
                <li>Android/IOS App launch</li>
                <li>Card Payment Integration</li>
                <li>Regulations</li>',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
));
    }
}
