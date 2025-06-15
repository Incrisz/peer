<?php

namespace Database\Seeders;

use App\Models\Wallet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WalletSeeder extends Seeder
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
                "title" => "BROWSERS/WALLETS",
                "button_text" => "Connect to MetaMask",
                "link" => env('APP_URL') . "/cryptocurrency-payment-gateway",
                "image" => "images/pns/metamask.png",
            ],
            [
                "title" => "BROWSERS/WALLETS",
                "button_text" => "Connect to TrustWallet",
                "link" => env('APP_URL') . "/cryptocurrency-payment-gateway",
                "image" => "images/pns/trustwallet.png",
            ],
            [
                "title" => "BROWSERS/WALLETS",
                "button_text" => "Connect too WalletConnect",
                "link" => env('APP_URL') . "/cryptocurrency-payment-gateway",
                "image" => "images/pns/walletconnect.png",
            ],
        ];

        Wallet::insert($data);
    }
}
