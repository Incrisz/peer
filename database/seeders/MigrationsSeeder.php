<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MigrationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
    */
    public function run()
    {
        DB::table('migrations')->insert(array (
  0 => 
  array (
    'id' => 1,
    'migration' => '2014_10_12_000000_create_users_table',
    'batch' => 1,
  ),
  1 => 
  array (
    'id' => 2,
    'migration' => '2014_10_12_100000_create_password_resets_table',
    'batch' => 1,
  ),
  2 => 
  array (
    'id' => 3,
    'migration' => '2016_01_01_000000_add_voyager_user_fields',
    'batch' => 1,
  ),
  3 => 
  array (
    'id' => 4,
    'migration' => '2016_01_01_000000_create_data_types_table',
    'batch' => 1,
  ),
  4 => 
  array (
    'id' => 5,
    'migration' => '2016_01_01_000000_create_pages_table',
    'batch' => 1,
  ),
  5 => 
  array (
    'id' => 6,
    'migration' => '2016_01_01_000000_create_posts_table',
    'batch' => 1,
  ),
  6 => 
  array (
    'id' => 7,
    'migration' => '2016_02_15_204651_create_categories_table',
    'batch' => 1,
  ),
  7 => 
  array (
    'id' => 8,
    'migration' => '2016_05_19_173453_create_menu_table',
    'batch' => 1,
  ),
  8 => 
  array (
    'id' => 9,
    'migration' => '2016_10_21_190000_create_roles_table',
    'batch' => 1,
  ),
  9 => 
  array (
    'id' => 10,
    'migration' => '2016_10_21_190000_create_settings_table',
    'batch' => 1,
  ),
  10 => 
  array (
    'id' => 11,
    'migration' => '2016_11_30_135954_create_permission_table',
    'batch' => 1,
  ),
  11 => 
  array (
    'id' => 12,
    'migration' => '2016_11_30_141208_create_permission_role_table',
    'batch' => 1,
  ),
  12 => 
  array (
    'id' => 13,
    'migration' => '2016_12_26_201236_data_types__add__server_side',
    'batch' => 1,
  ),
  13 => 
  array (
    'id' => 14,
    'migration' => '2017_01_13_000000_add_route_to_menu_items_table',
    'batch' => 1,
  ),
  14 => 
  array (
    'id' => 15,
    'migration' => '2017_01_14_005015_create_translations_table',
    'batch' => 1,
  ),
  15 => 
  array (
    'id' => 16,
    'migration' => '2017_01_15_000000_make_table_name_nullable_in_permissions_table',
    'batch' => 1,
  ),
  16 => 
  array (
    'id' => 17,
    'migration' => '2017_03_06_000000_add_controller_to_data_types_table',
    'batch' => 1,
  ),
  17 => 
  array (
    'id' => 18,
    'migration' => '2017_04_11_000000_alter_post_nullable_fields_table',
    'batch' => 1,
  ),
  18 => 
  array (
    'id' => 19,
    'migration' => '2017_04_21_000000_add_order_to_data_rows_table',
    'batch' => 1,
  ),
  19 => 
  array (
    'id' => 20,
    'migration' => '2017_07_05_210000_add_policyname_to_data_types_table',
    'batch' => 1,
  ),
  20 => 
  array (
    'id' => 21,
    'migration' => '2017_08_05_000000_add_group_to_settings_table',
    'batch' => 1,
  ),
  21 => 
  array (
    'id' => 22,
    'migration' => '2017_11_26_013050_add_user_role_relationship',
    'batch' => 1,
  ),
  22 => 
  array (
    'id' => 23,
    'migration' => '2017_11_26_015000_create_user_roles_table',
    'batch' => 1,
  ),
  23 => 
  array (
    'id' => 24,
    'migration' => '2018_03_11_000000_add_user_settings',
    'batch' => 1,
  ),
  24 => 
  array (
    'id' => 25,
    'migration' => '2018_03_14_000000_add_details_to_data_types_table',
    'batch' => 1,
  ),
  25 => 
  array (
    'id' => 26,
    'migration' => '2018_03_16_000000_make_settings_value_nullable',
    'batch' => 1,
  ),
  26 => 
  array (
    'id' => 27,
    'migration' => '2019_08_19_000000_create_failed_jobs_table',
    'batch' => 1,
  ),
  27 => 
  array (
    'id' => 28,
    'migration' => '2019_12_14_000001_create_personal_access_tokens_table',
    'batch' => 1,
  ),
  28 => 
  array (
    'id' => 29,
    'migration' => '2024_05_09_072909_create_site_pages_table',
    'batch' => 1,
  ),
  29 => 
  array (
    'id' => 30,
    'migration' => '2024_05_09_161453_create_sections_table',
    'batch' => 1,
  ),
  30 => 
  array (
    'id' => 31,
    'migration' => '2024_05_16_085148_create_banners_table',
    'batch' => 1,
  ),
  31 => 
  array (
    'id' => 32,
    'migration' => '2024_05_17_070940_create_home_sectioniis_table',
    'batch' => 1,
  ),
  32 => 
  array (
    'id' => 33,
    'migration' => '2024_05_19_183713_create_home_sectioniiis_table',
    'batch' => 1,
  ),
  33 => 
  array (
    'id' => 34,
    'migration' => '2024_05_20_034606_create_home_sectionivs_table',
    'batch' => 1,
  ),
  34 => 
  array (
    'id' => 35,
    'migration' => '2024_05_20_185933_create_home_sectionvs_table',
    'batch' => 1,
  ),
  35 => 
  array (
    'id' => 36,
    'migration' => '2024_05_23_055702_create_blogs_table',
    'batch' => 1,
  ),
  36 => 
  array (
    'id' => 37,
    'migration' => '2024_05_24_193358_create_featureds_table',
    'batch' => 1,
  ),
  37 => 
  array (
    'id' => 38,
    'migration' => '2024_05_25_180400_create_questions_table',
    'batch' => 1,
  ),
  38 => 
  array (
    'id' => 39,
    'migration' => '2024_05_26_072132_create_question_items_table',
    'batch' => 1,
  ),
  39 => 
  array (
    'id' => 40,
    'migration' => '2024_05_27_032514_create_about_headers_table',
    'batch' => 1,
  ),
  40 => 
  array (
    'id' => 41,
    'migration' => '2024_05_27_133036_create_about_seconds_table',
    'batch' => 1,
  ),
  41 => 
  array (
    'id' => 42,
    'migration' => '2024_05_27_202022_create_team_headers_table',
    'batch' => 1,
  ),
  42 => 
  array (
    'id' => 43,
    'migration' => '2024_05_28_033338_create_teams_table',
    'batch' => 1,
  ),
  43 => 
  array (
    'id' => 44,
    'migration' => '2024_05_28_034131_create_merchant_sections_table',
    'batch' => 1,
  ),
  44 => 
  array (
    'id' => 45,
    'migration' => '2024_05_28_155033_create_road_maps_table',
    'batch' => 1,
  ),
  45 => 
  array (
    'id' => 46,
    'migration' => '2024_05_29_031929_create_partners_table',
    'batch' => 1,
  ),
  46 => 
  array (
    'id' => 47,
    'migration' => '2024_05_29_053724_create_merchant_services_table',
    'batch' => 1,
  ),
  47 => 
  array (
    'id' => 48,
    'migration' => '2024_05_30_054136_create_target_markets_table',
    'batch' => 1,
  ),
  48 => 
  array (
    'id' => 49,
    'migration' => '2024_05_30_062519_create_merchant_merits_table',
    'batch' => 1,
  ),
  49 => 
  array (
    'id' => 50,
    'migration' => '2024_06_01_022351_create_promotes_table',
    'batch' => 1,
  ),
  50 => 
  array (
    'id' => 51,
    'migration' => '2024_06_01_050612_create_pns_utilities_table',
    'batch' => 1,
  ),
  51 => 
  array (
    'id' => 52,
    'migration' => '2024_06_01_060147_create_pns_items_table',
    'batch' => 1,
  ),
  52 => 
  array (
    'id' => 53,
    'migration' => '2024_06_01_082103_create_exclusives_table',
    'batch' => 1,
  ),
  53 => 
  array (
    'id' => 54,
    'migration' => '2024_06_02_184621_create_exchanges_table',
    'batch' => 1,
  ),
  54 => 
  array (
    'id' => 55,
    'migration' => '2024_06_02_193132_create_wallets_table',
    'batch' => 1,
  ),
  55 => 
  array (
    'id' => 56,
    'migration' => '2024_06_03_010307_create_allocations_table',
    'batch' => 1,
  ),
  56 => 
  array (
    'id' => 57,
    'migration' => '2024_06_03_192104_create_loyalty_programs_table',
    'batch' => 1,
  ),
  57 => 
  array (
    'id' => 58,
    'migration' => '2024_06_04_105916_create_loyalty_items_table',
    'batch' => 1,
  ),
  58 => 
  array (
    'id' => 59,
    'migration' => '2024_06_04_113706_create_offers_table',
    'batch' => 1,
  ),
  59 => 
  array (
    'id' => 60,
    'migration' => '2024_06_04_192118_create_merchant_programs_table',
    'batch' => 1,
  ),
  60 => 
  array (
    'id' => 61,
    'migration' => '2024_06_04_203926_create_brands_table',
    'batch' => 1,
  ),
  61 => 
  array (
    'id' => 62,
    'migration' => '2024_06_04_210635_create_collaboratives_table',
    'batch' => 1,
  ),
  62 => 
  array (
    'id' => 63,
    'migration' => '2024_06_05_035804_create_extensives_table',
    'batch' => 1,
  ),
  63 => 
  array (
    'id' => 64,
    'migration' => '2024_06_05_051007_create_merchant_items_table',
    'batch' => 1,
  ),
  64 => 
  array (
    'id' => 65,
    'migration' => '2024_06_05_120216_create_page_contents_table',
    'batch' => 1,
  ),
  65 => 
  array (
    'id' => 66,
    'migration' => '2024_06_05_185945_create_togethers_table',
    'batch' => 1,
  ),
  66 => 
  array (
    'id' => 67,
    'migration' => '2024_06_06_021836_create_masses_table',
    'batch' => 1,
  ),
  67 => 
  array (
    'id' => 68,
    'migration' => '2024_06_06_084151_create_cryptocurrencies_table',
    'batch' => 1,
  ),
  68 => 
  array (
    'id' => 69,
    'migration' => '2024_06_06_100040_create_crypto_images_table',
    'batch' => 1,
  ),
  69 => 
  array (
    'id' => 70,
    'migration' => '2024_06_06_125319_create_crypto_benefits_table',
    'batch' => 1,
  ),
  70 => 
  array (
    'id' => 71,
    'migration' => '2024_06_07_113259_create_exceptionals_table',
    'batch' => 1,
  ),
  71 => 
  array (
    'id' => 72,
    'migration' => '2024_06_07_121149_create_crypto_items_table',
    'batch' => 1,
  ),
  72 => 
  array (
    'id' => 73,
    'migration' => '2024_06_07_142229_create_promote_bussinesses_table',
    'batch' => 1,
  ),
  73 => 
  array (
    'id' => 74,
    'migration' => '2024_06_07_161054_create_contacts_table',
    'batch' => 1,
  ),
  74 => 
  array (
    'id' => 75,
    'migration' => '2024_06_19_122427_create_jobs_table',
    'batch' => 1,
  ),
  75 => 
  array (
    'id' => 76,
    'migration' => '2024_07_04_100652_faq_banner_image',
    'batch' => 1,
  ),
  76 => 
  array (
    'id' => 77,
    'migration' => '2024_07_09_084735_faq',
    'batch' => 2,
  ),
));
    }
}
