<?php

use App\Http\Controllers\BlockchainController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Modules\Admin\Facades\Voyager;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', [PageController::class, 'home'])->name('home');

Route::post('/newsletter', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');
Route::post('/contact-us', [ContactController::class, 'submit'])->name('contactus');

//Company
Route::get('/about', [PageController::class, 'about_page'])->name('about');
Route::get('/roadmap', [PageController::class, 'roadmap_page'])->name('roadmap');
Route::get('/partners', [PageController::class, 'partner_page'])->name('partners');

//Products
Route::get('/cryptocurrency-payment-gateway', [PageController::class, 'cryptocurrency_payment_gateway'])->name('cryptocurrency-payment-gateway');
Route::get('/gaming-club', [PageController::class, 'merchant_marketing_service'])->name('gaming-club');
// Route::get('/merchant-marketing-service', [PageController::class, 'merchant_marketing_service'])->name('merchant-marketing-service');
Route::get('/loyalty-club', [PageController::class, 'loyalty_club'])->name('loyalty-club');

//Tokens
Route::get('/pns-token', [PageController::class, 'pns_token'])->name('pns-token');
Route::get('/loyalty-program', [PageController::class, 'loyalty_program'])->name('loyalty-program');
Route::get('/merchant-program', [PageController::class, 'merchant_program'])->name('merchant-program');
Route::view('ico', 'ico')->name('ico');


//News
Route::get('/news', [PageController::class, 'news'])->name('news');
Route::get('/news/{id}/{title}', [PageController::class, 'single'])->name('news.single');

//Contact
Route::view('/contact-us', 'contact-us')->name('contact-us');

//Sign In
Route::view('/welcome-peernetics', 'welcome-peernetics')->name('welcome-peernetics');


//Legal
Route::view('/peernetics-terms-conditions', 'peernetics-terms-conditions')->name('peernetics-terms-conditions');
Route::view('/peernetics-privacy-policy', 'peernetics-privacy-policy')->name('peernetics-privacy-policy');
Route::view('/peernetics-cookie-policy', 'peernetics-cookie-policy')->name('peernetics-cookie-policy');
Route::view('/risk-disclaimer', 'risk-disclaimer')->name('risk-disclaimer');

//Faqs
Route::get('/faq', [PageController::class, 'faq'])->name('faq');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::prefix('admin')->middleware('admin.user')->group(function () {
    // Define your admin routes here
    Route::get('pages', [PageController::class, 'index'])->name('admin.page');
    Route::get('sections/{id}', [PageController::class, 'section'])->name('admin.page.section');
    Route::post('/update-section-positions', [PageController::class, 'updateSectionPositions'])->name('update-section-positions');
    // ** edit pages */
    Route::get('/banner/edit', [PageController::class, 'edit_banner'])->name('page.home');
    Route::put('banner/update', [PageController::class, 'update_banner'])->name('banner.update');

    /**  benefits */
    Route::post('/benefit', [PageController::class, 'store_benefit'])->name('benefit.store');
    Route::get('/benefit/edit/{id}', [PageController::class, 'edit_benefit'])->name('benefit.edit');
    Route::put('/benefit/update/{id}', [PageController::class, 'update_benefit'])->name('benefit.update');
    Route::delete('/benefit/{id}', [PageController::class, 'delete_benefit'])->name('benefit.delete');

    /** */
    // Route::put('/seciii/update/{id}', [PageController::class, 'update_seciii'])->name('update_seciii.update');
    Route::post('/gaming-section/update/{id}', [PageController::class, 'update_gaming_section'])->name('update_gaming.section');

    /** features */
    Route::post('/seciv/store', [PageController::class, 'store_seciv'])->name('seciv.store');
    Route::get('/seciv/edit/{id}', [PageController::class, 'edit_seciv'])->name('seciv.edit');
    Route::put('/seciv/update/{id}', [PageController::class, 'update_seciv'])->name('seciv.update');
    Route::delete('/seciv/{id}', [PageController::class, 'delete_seciv'])->name('seciv.delete');

    /** advantages */
    Route::post('/advantage/store', [PageController::class, 'store_advantage'])->name('advantage.store');
    Route::get('/advantage/edit/{id}', [PageController::class, 'edit_advantage'])->name('advantage.edit');
    Route::put('/advantage/update/{id}', [PageController::class, 'update_advantage'])->name('advantage.update');
    Route::delete('/advantage/{id}', [PageController::class, 'delete_advantage'])->name('advantage.delete');

    /** Blogs */
    Route::resource('blogs', PostController::class);

    /** Featured */
    Route::post('/feature/store', [PageController::class, 'store_featured'])->name('feature.store');
    Route::get('/feature/edit/{id}', [PageController::class, 'edit_featured'])->name('feature.edit');
    Route::put('/feature/update/{id}', [PageController::class, 'update_featured'])->name('feature.update');
    Route::delete('/feature/{id}', [PageController::class, 'delete_featured'])->name('feature.delete');

    /** question */
    Route::post('/question/store', [PageController::class, 'store_question'])->name('question.store');
    Route::get('/question/edit/{id}', [PageController::class, 'edit_question'])->name('question.edit');
    Route::put('/question/update/{id}', [PageController::class, 'update_question'])->name('question.update');

    /** question item */
    Route::post('/question_item/store', [PageController::class, 'store_question_item'])->name('questionitem.store');
    Route::get('/question_item/edit/{id}', [PageController::class, 'edit_question_item'])->name('questionitem.edit');
    Route::put('/question_item/update/{id}', [PageController::class, 'update_question_item'])->name('questionitem.update');
    Route::delete('/question_item/{id}', [PageController::class, 'delete_question_item'])->name('questionitem.delete');

    /** About us */
    Route::get('about', [PageController::class, 'about'])->name('pages.about');

    /** Header Section */
    Route::post('about_header', [PageController::class, 'about_header_store'])->name('about_header.store');
    Route::put('about_header/{id}', [PageController::class, 'about_header_update'])->name('about_header.update');

    /** Header Section */
    Route::post('sec_about', [PageController::class, 'sec_about_store'])->name('sec_about.store');
    Route::put('sec_about/{id}', [PageController::class, 'sec_about_update'])->name('sec_about.update');

    /** Team Header */
    Route::post('/team-header/store', [PageController::class, 'store_team_header'])->name('team-header.store');
    Route::put('/team-header/update/{id}', [PageController::class, 'update_team_header'])->name('team-header.update');

    /** Team */
    Route::post('/team/store', [PageController::class, 'store_team'])->name('team.store');
    Route::get('/team/edit/{id}', [PageController::class, 'edit_team'])->name('team.edit');
    Route::put('/team/update/{id}', [PageController::class, 'update_team'])->name('team.update');
    Route::delete('/team/{id}', [PageController::class, 'delete_team'])->name('team.delete');


    /** Merchant */
    Route::post('/merchant/store', [PageController::class, 'store_merchant_header'])->name('merchant.store');
    Route::put('/merchant/update/{id}', [PageController::class, 'update_merchant_header'])->name('merchant.update');

    /** Road maps */
    Route::get('road-maps', [PageController::class, 'road_map'])->name('road_map');
    Route::post('road-maps', [PageController::class, 'road_map_store'])->name('road_map_store');
    Route::put('road-maps/{id}', [PageController::class, 'road_map_update'])->name('road_map_update');
    Route::get('road-maps/{id}', [PageController::class, 'road_map_edit'])->name('road_map_edit');
    Route::delete('road-maps/{id}', [PageController::class, 'road_map_delete'])->name('road_map_delete');

    /** Partners */
    Route::get('partner', [PageController::class, 'partner_index'])->name('partner.index');
    Route::post('partner', [PageController::class, 'partner_store'])->name('partner.store');
    Route::put('partner/{id}', [PageController::class, 'partner_update'])->name('partner.update');
    Route::get('partner/{id}', [PageController::class, 'partner_edit'])->name('partner.edit');
    Route::delete('partner/{partner}', [PageController::class, 'partner_delete'])->name('partner.delete');

    /** Merchant Service */
    Route::get('merchant-service', [PageController::class, 'merchant_service_index'])->name('merchant-service.index');
    Route::post('merchant-service', [PageController::class, 'merchant_service_store'])->name('merchant-service.store');
    Route::put('merchant-service/{id}', [PageController::class, 'merchant_service_update'])->name('merchant-service.update');
    Route::get('merchant-service/{id}', [PageController::class, 'merchant_service_edit'])->name('merchant-service.edit');

    /** Target Marketing */
    Route::post('target-maketing', [PageController::class, 'target_marketing_store'])->name('target_marketing.store');
    Route::put('target-maketing/{id}', [PageController::class, 'target_marketing_update'])->name('target_marketing.update');

    /** Merchant Market */
    Route::post('merchant-market', [PageController::class, 'merchant_merit_store'])->name('merchant-market.store');
    Route::get('merchant-market/{id}', [PageController::class, 'merchant_merit_edit'])->name('merchant-market.edit');
    Route::put('merchant-market/{id}', [PageController::class, 'merchant_merit_update'])->name('merchant-market.update');
    Route::delete('merchant-market/{id}', [PageController::class, 'merchant_merit_delete'])->name('merchant-market.delete');

    /** promotion */
    Route::post('promotion', [PageController::class, 'promote_store'])->name('promotion.store');
    Route::put('promotion/{id}', [PageController::class, 'promote_update'])->name('promotion.update');


    /** Token */
    /** PNS Token */
    Route::get('pns_token', [PageController::class, 'pns_token_index'])->name('pns_token.index');
    Route::post('pns_token', [PageController::class, 'pns_token_store'])->name('pns_token.store');
    Route::put('pns_token/{id}', [PageController::class, 'pns_token_update'])->name('pns_token.update');
    Route::Put('token/{id}', [PageController::class, 'updatePnsToken'])->name('pns_token.headerupdate');

    /** Pns Item */
    Route::get('pns_item/{id}', [PageController::class, 'pns_item_edit'])->name('pns_item.edit');
    Route::post('pns_item', [PageController::class, 'pns_item_store'])->name('pns_item.store');
    Route::put('pns_item/{id}', [PageController::class, 'pns_item_update'])->name('pns_item.update');
    Route::delete('pns_item/{pnsItem}', [PageController::class, 'pns_item_delete'])->name('pns_item.delete');

    /** Exclusive */
    Route::post('exclusive', [PageController::class, 'exclusive_store'])->name('exclusive.store');
    Route::put('exclusive/{id}', [PageController::class, 'exclusive_update'])->name('exclusive.update');

    /** Exchange */
    Route::post('exchange', [PageController::class, 'exchange_store'])->name('exchange.store');
    Route::put('exchange/{id}', [PageController::class, 'exchange_update'])->name('exchange.update');

    /** Wallet */
    Route::post('wallet', [PageController::class, 'wallet_store'])->name('wallet.store');
    Route::get('wallet/{id}', [PageController::class, 'wallet_edit'])->name('wallet.edit');
    Route::put('wallet/{id}', [PageController::class, 'wallet_update'])->name('wallet.update');
    Route::delete('wallet/{id}', [PageController::class, 'wallet_delete'])->name('wallet.delete');

    /** Allocation */
    Route::post('allocation', [PageController::class, 'allocation_store'])->name('allocation.store');
    Route::get('allocation/{id}', [PageController::class, 'allocation_edit'])->name('allocation.edit');
    Route::put('allocation/{id}', [PageController::class, 'allocation_update'])->name('allocation.update');
    Route::get('allocation/delete/{id}', [PageController::class, 'allocation_delete'])->name('allocation.delete');

    /** Loyalty Program */
    Route::get('loyalty', [PageController::class, 'loyalty_index'])->name('loyalty.index');
    Route::post('loyalty/program', [PageController::class, 'loyalty_store'])->name('loyalty-store');
    Route::put('loyalty/program/{id}', [PageController::class, 'loyalty_update'])->name('loyalty-update');

    #loyalty item
    Route::post('loyalty-item', [PageController::class, 'loyalty_item_store'])->name('loyalty-item-store');
    Route::put('loyalty-item/{id}', [PageController::class, 'loyalty_item_update'])->name('loyalty-item-update');
    Route::get('loyalty-item/{id}', [PageController::class, 'loyalty_item_edit'])->name('loyalty-item-edit');
    Route::delete('loyalty-item/{id}', [PageController::class, 'loyalty_item_delete'])->name('loyalty-item-delete');

    #offer
    Route::post('offer', [PageController::class, 'offer_store'])->name('offer-store');
    Route::put('offer/{id}', [PageController::class, 'offer_update'])->name('offer-update');
    Route::get('offer/{id}', [PageController::class, 'offer_edit'])->name('offer-edit');

    /** Merchant Program */
    Route::get('merchant-program', [PageController::class, 'merchant_program_index'])->name('merchant_program.index');

    #merchant program header
    Route::put('merchant-program-header/{id}', [PageController::class, 'merchant_program_update'])->name('merchant_program_header.update');
    Route::post('merchant-program-header', [PageController::class, 'merchant_program_store'])->name('merchant_program_header.store');

    #brand
    Route::put('brand/{id}', [PageController::class, 'brand_update'])->name('brand.update');
    Route::post('brand', [PageController::class, 'brand_store'])->name('brand.store');

    #faq
    Route::get('/faq', [PageController::class, 'faq_page'])->name('faq.page');
    Route::post('faq', [PageController::class, 'faq_store'])->name('faq.store');
    Route::get( '/faq-banner', [PageController::class, 'faq_banner'])->name('faq.banner');
    Route::get('/faq/{id}', [PageController::class, 'faq_edit'])->name('faq.edit');
    Route::put('/faq/{id}', [PageController::class, 'faq_update'])->name('faq.update');
    Route::put('/faq-banner/update/{id}', [PageController::class,'updateFaqBannerImage'])->name('update.faq.banner');
    Route::delete('/faq/{id}', [PageController::class, 'delete_faq'])->name('faq.delete');
   
    #Ioc Pre-sale
    Route::get('/ioc-pre-sale', [PageController::class, 'ioc_pre_sale_page'])->name('ioc.page');
    Route::get('/export-transactions-csv', [PageController::class, 'exportTransactionsCsv'])->name('export.transactions.csv');
   
    // Corrected structure
    Route::post('/ioc-store-presale-address/{id?}', [PageController::class, 'ioc_store_presale_address'])->name('ioc.store.presale.address');
   
    Route::post('/ioc-store-countdown/{id?}', [PageController::class, 'ioc_store_countdown'])->name('ioc.store.countdown');
    Route::post('/ioc-round/{id?}', [PageController::class, 'ioc_round'])->name('ioc.round');
   
    Route::get('/ioc-view', [PageController::class, 'ioc_view'])->name('ioc.view');
    Route::delete('/ioc-delete/{id?}', [PageController::class, 'ioc_delete'])->name('ioc.delete');


    Route::get('/gaming-view', [PageController::class, 'gaming_view'])->name('gaming.page');
    Route::post('/gaming-view/page-update', [PageController::class, 'gaming_page_update'])->name('gaming.page.update');
    

    #collab
    Route::put('collab/{id}', [PageController::class, 'collab_update'])->name('collab.update');
    Route::post('collab', [PageController::class, 'collab_store'])->name('collab.store');

    #extensive
    Route::put('extensive/{id}', [PageController::class, 'extensive_update'])->name('extensive.update');
    Route::post('extensive', [PageController::class, 'extensive_store'])->name('extensive.store');

    #merchant item
    Route::put('merchant_item/{id}', [PageController::class, 'merchant_item_update'])->name('merchant_item.update');
    Route::get('merchant_item/{id}', [PageController::class, 'merchant_item_edit'])->name('merchant_item.edit');
    Route::delete('merchant_item/{id}', [PageController::class, 'merchant_item_delete'])->name('merchant_item.delete');
    Route::post('merchant_item', [PageController::class, 'merchant_item_store'])->name('merchant_item.store');

    #together 
    Route::put('together/{id}', [PageController::class, 'together_update'])->name('together.update');
    Route::post('together', [PageController::class, 'together_store'])->name('together.store');

    #mass
    Route::put('mass/{id}', [PageController::class, 'mass_update'])->name('mass.update');
    Route::post('mass', [PageController::class, 'mass_store'])->name('mass.store');

    /** Cryptocurrency Payment Gateway */
    Route::get('cryptocurrency', [PageController::class, 'crypto_index'])->name('cryptocurrency.index');
    #crypto header
    Route::post('crypto', [PageController::class, 'crypto_store'])->name('crypto.store');
    Route::put('crypto/{id}', [PageController::class, 'crypto_update'])->name('crypto.update');

    #crypto Image
    Route::post('cryptoimage', [PageController::class, 'crypto_store_image'])->name('cryptoimage.store');
    Route::put('cryptoimage/{id}', [PageController::class, 'crypto_update_image'])->name('cryptoimage.update');

    #crypto benefit
    Route::post('crypto_benefit', [PageController::class, 'crypto_benefit_store'])->name('crypto_benefit.store');
    Route::put('crypto_benefit/{id}', [PageController::class, 'crypto_benefit_update'])->name('crypto_benefit.update');
    Route::get('crypto_benefit/{id}', [PageController::class, 'crypto_benefit_edit'])->name('crypto_benefit.edit');
    Route::delete('crypto_benefit/{id}', [PageController::class, 'crypto_benefit_delete'])->name('crypto_benefit.delete');

    #Exceptional
    Route::post('exceptional', [PageController::class, 'exceptional_store'])->name("exceptional.store");
    Route::put('exceptional/{id}', [PageController::class, 'exceptional_update'])->name("exceptional.update");

    #CryptoItem
    Route::post('cryptoItem', [PageController::class, 'cryptoItem_store'])->name("cryptoItem.store");
    Route::put('cryptoItem/{id}', [PageController::class, 'cryptoItem_update'])->name("cryptoItem.update");
    Route::get('cryptoItem/{id}', [PageController::class, 'cryptoItem_edit'])->name("cryptoItem.edit");
    Route::delete('cryptoItem/{id}', [PageController::class, 'cryptoItem_delete'])->name("cryptoItem.delete");

    #promoteBusiness
    Route::post('promoteBusiness', [PageController::class, 'promoteBusiness_store'])->name('promoteBusiness.store');
    Route::put('promoteBusiness/{id}', [PageController::class, 'promoteBusiness_update'])->name('promoteBusiness.update');

    Route::get('contacts', [ContactController::class, 'index'])->name('admin.contacts.index');
    Route::get('contacts/{contact}', [ContactController::class, 'index'])->name('admin.contacts.show');

    Route::get('/transaction', [BlockchainController::class, 'getTransactions'])->name('get.transactions');

});

require __DIR__ . '/auth.php';
