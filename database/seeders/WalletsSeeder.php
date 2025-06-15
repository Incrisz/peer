<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WalletsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
    */
    public function run()
    {
        DB::table('wallets')->insert(array (
  0 => 
  array (
    'id' => 1,
    'title' => 'BROWSERS/WALLETS',
    'button_text' => 'Connect to MetaMask',
    'link' => 'http://peeneticsbe.test/cryptocurrency-payment-gateway',
    'image' => 'images/pns/metamask.png',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1 => 
  array (
    'id' => 2,
    'title' => 'BROWSERS/WALLETS',
    'button_text' => 'Connect to TrustWallet',
    'link' => 'http://peeneticsbe.test/cryptocurrency-payment-gateway',
    'image' => 'images/pns/trustwallet.png',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  2 => 
  array (
    'id' => 3,
    'title' => 'BROWSERS/WALLETS',
    'button_text' => 'Connect too WalletConnect',
    'link' => 'http://peeneticsbe.test/cryptocurrency-payment-gateway',
    'image' => 'images/pns/walletconnect.png',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
));
    }
}
