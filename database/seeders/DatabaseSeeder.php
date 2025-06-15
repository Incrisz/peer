<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\CryptoItem;
use App\Models\Exceptional;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
        /**
         * Seed the application's database.
         *
         * @return void
         */
        public function run()
        {
                $this->call(VoyagerDatabaseSeeder::class);
                $this->call(GamingSectionSeeder::class);
                $this->call(GamePagesSeeder::class);
                $this->call(HomeSectioniiiSeeder::class);
                $this->call(HomeSectionivSeeder::class);
                $this->call(AllocationSeeder::class);
                $this->call(PageSeeder::class);
                $this->call(SectionSeeder::class);
                $this->call(BannerSeeder::class);
                $this->call(BenefitSeeder::class);
                $this->call(HomeSectionvSeeder::class);
                $this->call(MenuItemSeeder::class);
                $this->call(FeaturedSeeder::class);
                $this->call(QuestionSeeder::class);
                $this->call(QuestionItemSeeder::class);
                $this->call(AboutHeaderSeeder::class);
                $this->call(AboutSecondSeeder::class);
                $this->call(TeamHeaderSeeder::class);
                $this->call(MerchantSectionSeeder::class);
                $this->call(TeamSeeder::class);
                $this->call(RoadMapSeeder::class);
                $this->call(PartnerSeeder::class);
                $this->call(MerchantServiceSeeder::class);
                $this->call(TargetMarketSeeder::class);
                $this->call(MerchantMeritSeeder::class);
                $this->call(PromoteSeeder::class);
                $this->call(PnsUtilitySeeder::class);
                $this->call(PnsItemSeeder::class);
                $this->call(ExclusiveSeeder::class);
                $this->call(ExchangeSeeder::class);
                $this->call(WalletSeeder::class);
                $this->call(LoyaltyProgramSeeder::class);
                $this->call(LoyaltyItemSeeder::class);
                $this->call(OfferSeeder::class);
                $this->call(MerchantProgramSeeder::class);
                $this->call(BrandSeeder::class);
                $this->call(CollaborativeSeeder::class);
                $this->call(ExtensiveSeeder::class);
                $this->call(MerchantItemSeeder::class);
                $this->call(TogetherSeeder::class);
                $this->call(MassSeeder::class);
                $this->call(CryptocurrencySeeder::class);
                $this->call(CryptoImageSeeder::class);
                $this->call(CryptoBenefitSeeder::class);
                $this->call(ExceptionalSeeder::class);
                $this->call(CryptoItemSeeder::class);
                $this->call(BlogSeeder::class);
                $this->call(PromoteBussinessSeeder::class);

                //testing
                $this->call(PageContentSeeder::class);
        }
}
