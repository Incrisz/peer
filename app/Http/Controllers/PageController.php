<?php

namespace App\Http\Controllers;

use App\Models\AboutHeader;
use App\Models\AboutSecond;
use App\Models\Allocation;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Brand;
use App\Models\Collaborative;
use App\Models\Countdown;
use App\Models\CryptoBenefit;
use App\Models\Cryptocurrency;
use App\Models\CryptoImage;
use App\Models\CryptoItem;
use App\Models\Exceptional;
use App\Models\Exchange;
use App\Models\Exclusive;
use App\Models\Extensive;
use App\Models\Featured;
use App\Models\HomeSectionii;
use App\Models\HomeSectioniii;
use App\Models\HomeSectioniv;
use App\Models\HomeSectionv;
use App\Models\LoyaltyItem;
use App\Models\LoyaltyProgram;
use App\Models\Mass;
use App\Models\MerchantItem;
use App\Models\MerchantMerit;
use App\Models\MerchantProgram;
use App\Models\MerchantSection;
use App\Models\MerchantService;
use App\Models\Offer;
use App\Models\PageContent;
use App\Models\Partner;
use App\Models\PnsItem;
use App\Models\PnsUtility;
use App\Models\Promote;
use App\Models\PromoteBussiness;
use App\Models\Question;
use App\Models\QuestionItem;
use App\Models\RoadMap;
use App\Models\Section;
use App\Models\SitePage;
use App\Models\TargetMarket;
use App\Models\Team;
use App\Models\TeamHeader;
use App\Models\Together;
use App\Models\Wallet;
use App\Models\Faq;
use App\Models\FaqBannerImage;
use App\Models\GamingPage;
use App\Models\GamingSection;
use App\Models\PnsToken;
use App\Models\Round;
use App\Models\Ioc;
use App\Models\IocPresale;
use App\Models\IocTimer;
use App\Models\Set;
use Exception;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Services\PolygonNetworkService;
use Illuminate\Pagination\LengthAwarePaginator;

use function PHPUnit\Framework\returnSelf;

class PageController extends Controller
{

    protected $polygonNetworkService;
    //

    public function __construct(PolygonNetworkService $polygonNetworkService)
{
    $this->polygonNetworkService = $polygonNetworkService;
}

    public function testPoc()
    {
        return view('index');
    }

    public function home()
    {
        $data['banner'] = Banner::first();
        $data['header'] = HomeSectionii::where('is_header', '1')->get();

        $data['benefits'] = HomeSectionii::where('is_header', '0')->get();
        $data['dat'] = GamingSection::first();
        // $data['dat'] = HomeSectioniii::first();
        $data['section_iv'] = HomeSectioniv::all();
        $data['section_v'] = HomeSectionv::all();
        $data['blogs'] = Blog::paginate(3);
        $data['featureds'] = Featured::all();
        $data['questions'] = Question::all();
        $data['questionItems'] = QuestionItem::all();
        return view('home', $data,);
    }

    public function about_page()
    {
        $data['about_header'] = AboutHeader::first();
        $data['about_second'] = AboutSecond::first();
        $data['team_header'] = TeamHeader::first();
        $data['teams'] = Team::paginate(5);
        $data['merchant'] = MerchantSection::first();
        $data['section_v'] = HomeSectionv::all();

        $data['pageContent'] = PageContent::where('page_id', 2)->first();
        return view('about', $data);
    }

    public function news()
    {
        $data['blogs'] = Blog::all();
        return view("news", $data);
    }

    public function single($id)
    {
        $data['blog'] = Blog::find($id);
        return view("single_blog_post", $data);
    }

    public function roadmap_page()
    {
        $data['roadmaps'] = RoadMap::all();

        return view('roadmap', $data);
    }

    public function partner_page()
    {
        $data['partners'] = Partner::all();

        return view('partners', $data);
    }

    public function pns_token()
    {
        $data['pns_token'] = PnsToken::first();
        $data['pns'] = PnsUtility::first();
        $data['pnsItems'] = PnsItem::all();
        $data['exclusive'] = Exclusive::first();
        $data['exchange'] = Exchange::first();
        $data['wallets'] = Wallet::all();
        $data['allocations'] = Allocation::all();
        $data['merchant'] = MerchantSection::first();
        return view('pns-token', $data);
    }

    public function merchant_marketing_service()
    {
        // $data['merchant'] = MerchantService::first();
        // $data['target_market'] = TargetMarket::first();
        // $data['merchant_market'] = MerchantMerit::all();
        // $data['promote'] = Promote::first();

        $data['dat'] = GamingPage::first();

        return view('merchant-marketing-service', $data);
    }

    public function loyalty_club()
    {
        // return "Hello";
        $data['loyaltyProgram'] = LoyaltyProgram::first();
        $data['loyaltyItems'] = LoyaltyItem::all();
        return view('loyalty-club', $data);
    }

    public function loyalty_program()
    {
        $data['loyaltyProgram'] = LoyaltyProgram::first();
        $data['loyaltyItems'] = LoyaltyItem::all();
        $data['offer'] = Offer::first();
        $data['pns_token'] = PnsToken::first();

        return view('loyalty-program', $data);
    }


    public function  merchant_program()
    {
        $data['merchantProgram'] = MerchantProgram::first();
        $data['brand'] = Brand::first();
        // return view("merchant", $data);
        $data['collab'] = Collaborative::first();
        $data['extensive'] = Extensive::first();
        $data['merchantItems'] = MerchantItem::all();
        $data['together'] = Together::first();
        $data['mass'] = Mass::first();
        $data['merchant'] = MerchantService::first();
        $data['target_market'] = TargetMarket::first();
        $data['merchant_market'] = MerchantMerit::all();
        $data['promote'] = Promote::first();
        return view("merchant-program", $data);
    }

    public function cryptocurrency_payment_gateway()
    {
        $data['crypto'] = Cryptocurrency::first();
        $data['crypoImage'] = CryptoImage::first();
        $data['cryptoBenefits'] = CryptoBenefit::paginate(5);
        $data['cryptoItems'] = CryptoItem::paginate(5);
        $data['exceptional'] = Exceptional::first();
        $data['promoteBusiness'] = PromoteBussiness::first();
        return view('cryptocurrency-payment-gateway', $data);
    }


    public function index()
    {
        $data['pages'] = SitePage::all();
        return view('pages.index', $data);
    }

    public function section($id)
    {
        $data['sections'] = Section::where('page_id', $id)->orderBy('position')->get();
        return view('pages.section', $data);
    }

    public function updateSectionPositions(Request $request)
    {
        try {
            foreach ($request->positions as $position) {
                Section::where('id', $position['id'])->update(['position' => $position['position']]);
            }

            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function edit_banner()
    {
        $data['banner'] = Banner::first();
        $data['sec_home'] = HomeSectionii::paginate(5);
        // $data['dat'] = HomeSectioniii::first();
        $data['section_iv'] = HomeSectioniv::paginate(5);
        $data['dat'] = GamingSection::first();
        $data['section_v'] = HomeSectionv::paginate(5);
        $data['blogs'] = Blog::paginate(5);
        $data['featureds'] = Featured::orderBy('id', 'desc')->paginate(5);
        $data['questions'] = Question::paginate(5);
        $data['questionItems'] = QuestionItem::paginate(5);


        return view('pages.home.edit-banner', $data);
    }

    public function update_banner(Request $request)
    {

        // Validate request data
        $data = $request->validate([
            'title' => 'required|string',
            'subtitle' => 'required|string',
            'middle_text' => 'required|string',
            'loyalty_button_text' => 'required|string',
            'ico_button_text' => 'required|string',
            'images' => 'required|json', // Validate as JSON string
        ]);

        // Decode JSON to ensure it's valid
        $images = json_decode($data['images'], true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            return redirect()->back()->withErrors(['images' => 'Invalid JSON data']);
        }

        $banner = Banner::first();
        if (!$banner) {
            $banner = new Banner();
        }

        $banner->title = $data['title'];
        $banner->subtitle = $data['subtitle'];
        $banner->middle_text = $data['middle_text'];
        $banner->loyalty_button_text = $data['loyalty_button_text'];
        $banner->ico_button_text = $data['ico_button_text'];
        $banner->images = $data['images']; // Store JSON string

        $banner->save();

        return redirect()->back()->with('success', 'Banner updated successfully');
    }

    public function store_benefit(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        HomeSectionii::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->back()->with('success', 'New benefit added successfully!');
    }

    //FAQ
    public function faq_page(Request $requestcc)
    {
        $faq_banner_images = FaqBannerImage::all();
        $faqs = Faq::all();

        return view('pages.faq.index', ['faq_banner_images' => $faq_banner_images, 'faqs' => $faqs]);
    }

    //Faq Update banner image
    public function updateFaqBannerImage(Request $request, $id)
    {
       

        // if ($request->hasFile('image')) {
        //     // Process and store the uploaded image in the custom path
        //     $image = $request->file('image');
        //     $imageName = $image->getClientOriginalName(); // Use the original file name
        //     $imagePath = $image->storeAs('images/faqbanner', $imageName, 'public');

        //     // Update the image URL path in the database
        //     $imageURL = '/' . $imagePath;
        //     $faq_banner_image->image = $imageURL; // Update the image field in the database
        //     $faq_banner_image->save();
        // }

        $request->validate([
           
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        $faq_banner_image = FaqBannerImage::findOrFail($id);

        // $blog = AboutHeader::first();
       
        $path = 'images/faqbanner/';
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($faq_banner_image->image) {
                $oldImagePath = public_path($path . $faq_banner_image->image);
                if (File::exists($oldImagePath)) {
                    File::delete($oldImagePath);
                }
            }

            $imageName = $request->image->getClientOriginalName();
            $request->image->move(public_path($path), $imageName);
            $faq_banner_image->image =  $path . $imageName;
        }
        $faq_banner_image->save();
       

        return redirect()->back()->with('success', 'FAQ banner image updated successfully');
    }

    //Faq create
    public function faq_store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        Faq::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->back()->with('success', 'New Faq added successfully!');
    }

    public function faq()
    {
        $faqs = Faq::all();
        $faq_banner_images = FaqBannerImage::all();

        return view('faq', ['faqs' => $faqs, 'faq_banner_images' => $faq_banner_images]);
    }

    public function faq_edit($id)
    {
        return $this->editData($id, Faq::class, 'faq', 'pages.faq.edit');
    }
    
    public function faq_update(Request $request, $id)
{
    $faq = Faq::find($id);

    if ($faq) {
        $faq->update([
            'title' => $request->input('title'),
            'description' => $request->input('description')
        ]);

        return redirect()->route('faq.edit', ['id' => $faq->id])->with('success', 'Faq updated successfully');
    } else {
        // Handle the case where the Faq with the given ID is not found
        return redirect()->back()->with('error', 'Faq not found');
    }
}


public function delete_faq($id)
{
    $faq = Faq::where('id', $id)->firstOrFail();


    $faq->delete();

    return redirect()->back()->with('success', 'Faq deleted successfully.');
}



// Ioc Pre-sale 

// public function ioc_pre_sale_page(Request $request)
// {
//     $contractAddress = '0x788873EfB21a0743dCE048A733D7deA756E12145';
//     $contractAddress = config('services.smartcontract.address');

//     try {
//         $transactions = $this->polygonNetworkService->getContractTransactions($contractAddress);
//     } catch (\Exception $e) {
//         return redirect()->back()->with('error', $e->getMessage());
//     }

//     $data['iocs'] = Ioc::latest()->get();
//     $data['round'] = Countdown::first();
//     $data['transactions'] = $transactions;


//     // For nativeTransactions pagination
//     $nativeTransactions = collect($transactions['nativeTransactions'] ?? []);
//     $perPage = 10;
//     $currentPage = request()->input('page', 1);
//     $paginatedNativeTransactions = new LengthAwarePaginator(
//         $nativeTransactions->forPage($currentPage, $perPage),
//         $nativeTransactions->count(),
//         $perPage,
//         $currentPage,
//         ['path' => request()->url(), 'query' => request()->query()]
//     );
//     $data['nativeTransactions'] = $paginatedNativeTransactions;

//     // For tokenTransfers pagination
//     $tokenTransfers = collect($transactions['tokenTransfers'] ?? []);
//     $currentPageToken = request()->input('tokenPage', 1);  // Use a distinct page query for token transfers
//     $paginatedTokenTransfers = new LengthAwarePaginator(
//         $tokenTransfers->forPage($currentPageToken, $perPage),
//         $tokenTransfers->count(),
//         $perPage,
//         $currentPageToken,
//         ['path' => request()->url(), 'query' => request()->query()]
//     );
//     $data['tokenTransfers'] = $paginatedTokenTransfers;


//     // dd($data['transactions']['tokenTransfers']);

//     return view('pages.ioc.ioc-crud', $data);
// }


public function ioc_pre_sale_page(Request $request)
{

    // dd($request->all());
    // $contractAddress = '0x788873EfB21a0743dCE048A733D7deA756E12145';
    $contractAddress = config('services.smartcontract.address');

    try {
        $transactions = $this->polygonNetworkService->getContractTransactions($contractAddress);
    } catch (\Exception $e) {
        return redirect()->back()->with('error', $e->getMessage());
    }

    $data['iocs'] = Ioc::latest()->get();
    $data['timer'] = IocTimer::first();
    $data['transactions'] = $transactions;
    $data['address'] = IocPresale::first();
    $perPage = 10;


    // For tokenTransfers pagination
    $tokenTransfers = collect($transactions['tokenTransfers'] ?? []);
    $currentPageToken = request()->input('page', 1); // Use 'tokenPage' for token transfers
    $paginatedTokenTransfers = new LengthAwarePaginator(
        $tokenTransfers->forPage($currentPageToken, $perPage),
        $tokenTransfers->count(),
        $perPage,
        $currentPageToken,
        ['path' => request()->url(), 'query' => request()->query()]
    );
    $data['tokenTransfers'] = $paginatedTokenTransfers;


    // For nativeTransactions pagination
    $nativeTransactions = collect($transactions['nativeTransactions'] ?? []);
    
    $currentPage = request()->input('page', 1); // Using 'page' for native transactions
    $paginatedNativeTransactions = new LengthAwarePaginator(
        $nativeTransactions->forPage($currentPage, $perPage),
        $nativeTransactions->count(),
        $perPage,
        $currentPage,
        ['path' => request()->url(), 'query' => request()->query()]
    );
    $data['nativeTransactions'] = $paginatedNativeTransactions;

    

    return view('pages.ioc.ioc-crud', $data);
}
public function gaming_view()
{

    $data['dat'] = GamingPage::first();
    return view('pages.gaming.game-crud', $data);
}

public function gaming_page_update(Request $request)
{

    $request->validate([

        'texti'=> 'string|nullable',
        'textii'=>'string|nullable',
        'hero_text'=>'string|nullable',
        'google_store_link'=>'string|nullable',
        'apple_store_link'=>'string|nullable',
        'image'=>'nullable|image|mimes:jpeg,png,jpg,gif,svg',
    ]);

    $data = $request->all();
    $game_page = GamingPage::first();
    if ($request->hasFile('image')) {

        if ($request->image) {

            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);

            $oldImage = public_path('images') . '/' . $game_page->image;
            if (file_exists($oldImage)) {
                unlink($oldImage);
            }

            $game_page->image = "images/" . $imageName;
            $game_page->save();
        }
       
    }

    $game_page->update([
        'texti'=> $data['texti'],
        'textii'=> $data['textii'],
        'hero_text'=> $data['hero_text'],
        'google_store_link'=> $data['google_store_link'],
        'apple_store_link'=> $data['apple_store_link'],
    ]);

    return redirect()->back()->with('success', 'Updated successfully.');

}

public function getTransactions(Request $request)
{
    $contractAddress = config('services.smartcontract.address');

    if (!$contractAddress) {
        return response()->json(['error' => 'Contract address is required'], 400);
    }

    try {
        $transactions = $this->polygonNetworkService->getContractTransactions($contractAddress);
        return response()->json($transactions);
    } catch (\Exception $e) {
        return response()->json(['error' => $e->getMessage()], 500);
    }
}

public function exportTransactionsCsv()
{
    // Contract address from configuration
    $contractAddress = config('services.smartcontract.address');
    $polygonnetwork = config('services.polygonscan.network');

    // Polygonscan export URL with the specified address
    $polygonScanUrl = $polygonnetwork . '/exportData?type=address&a=' . $contractAddress;

    // Redirect to the Polygonscan export URL
    return redirect()->away($polygonScanUrl);
}






public function ioc_view()
{
    
    $data['iocs'] = Ioc::latest()->get();
    return view('pages.ioc.ioc-view',  $data);
}

public function ioc_store_presale_address(Request $request, $id=null)
{
    
 $validated = $request->validate([
    'ioc_token_price'=> 'required',
    'token_address'=> 'required',
    'presale_address'=> 'required'

 ]);

 try {
    $ioc_presale_address = IocPresale::updateOrCreate(
        ['id'=>$id],
        $validated
    );

    return redirect()->back()->with('success', 'Success!');
 } catch (\Exception $e) {
    
    return redirect()->back()->with('error', 'Not added!');
 }
}

public function ioc_store_countdown(Request $request, $id=null)
{
    
 $validated = $request->validate([
    'date'=> 'date',
    'time'=> 'required',
    'post_countdown_price'=> 'required'

 ]);

 try {
    $ioc_countdown = IocTimer::updateOrCreate(
        ['id'=>$id],
        $validated
    );

    return redirect()->back()->with('success', 'Success!');
 } catch (\Exception $e) {
    
    return redirect()->back()->with('error', 'Not added!');
 }
}



public function ioc_round(Request $request, $id= null)
{

    $validated = $request->validate([
        
        'title' => 'required',
        'stake_price' => 'required',
        'raised_price' => 'required',
        'sold_allocation' => 'required',
        'currency' => 'string',
    ]);

    try {
        
        $ioc = Ioc::updateOrCreate(
            ['id' => $id], 
            $validated    
        );

        return redirect()->back()->with('success', 'Success!');

    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Not added!');

    }
    
}


public function ioc_delete($id)
{
    $ioc = Ioc::where('id', $id)->first();

    $ioc->delete();

    return redirect()->back()->with('success', 'Ioc deleted successfully.');
}


    
    public function edit_benefit($id)
    {
        $data['benefit'] = HomeSectionii::find($id);
        return view('pages.home.edit-benefit', $data);
    }

    public function update_benefit(Request $request, $id)
    {
        // return $request;
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);
        $benefit = HomeSectionii::find($id);
        $benefit->title = $request->title;
        $benefit->description = $request->description;
        $benefit->save();

        return redirect()->route('page.home')->with('success', 'New benefit added successfully!');
    }

    public function delete_benefit($id)
    {
        $benefit = HomeSectionii::where('id', $id)->firstOrFail();


        $benefit->delete();

        return response()->json(['success' => 'Benefit deleted successfully.']);
    }

    // public function update_seciii(Request $request, $id)
    // {
    //     $request->validate([
    //         'texti' => 'required',
    //         'textii' => 'required',
    //         'textiii' => 'required',
    //         'textiv' => 'required',
    //         'textv' => 'required',
    //         'textvi' => 'required',
    //         'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg', // Add validation for image
    //     ]);


    //     $benefit = HomeSectioniii::find($id);
    //     $benefit->texti = $request->texti;
    //     $benefit->textii = $request->textii;
    //     $benefit->textiii = $request->textiii;
    //     $benefit->textiv = $request->textiv;
    //     $benefit->textv = $request->textv;
    //     $benefit->textvi = $request->textvi;

    //     if ($request->hasFile('image')) {
    //         // Handle the file upload
    //         $image = $request->file('image');
    //         $imageName = time() . '.' . $image->getClientOriginalExtension();
    //         $image->move(public_path('images'), $imageName);

    //         // Optionally, you might want to delete the old image if it exists
    //         if ($benefit->image) {
    //             $oldImage = public_path('images') . '/' . $benefit->image;
    //             if (file_exists($oldImage)) {
    //                 unlink($oldImage);
    //             }
    //         }

    //         // Save the new image path to the model
    //         $benefit->image = "images/" . $imageName;
    //     }



    //     $benefit->save();

    //     return redirect()->route('page.home')->with('success', 'Benefit updated successfully!');
    // }

    public function update_gaming_section(Request $request, $id=null)
    {
        
        $request->validate([
            'description' => 'string|nullable',
            'title'=> 'string|nullable',
            'btn_name'=>'string|nullable',
            'btn_link' => 'nullable',
            'moblie_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg', 
            'desktop_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg', 
        ]);

        // dd($request->all());



        $data = $request->all();

        // if (!empty($data['btn_link'])) {
        //     $data['btn_link'] = addslashes($data['btn_link']);
        // }
// dd($data['btn_link']);
        $game_section = GamingSection::find($id);
        if ($request->hasFile('mobile_image') || $request->hasFile('desktop_image')) {
            // Handle the file upload
           

            // Optionally, you might want to delete the old image if it exists
            if ($request->mobile_image) {

                $image = $request->file('mobile_image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('images'), $imageName);

                $oldImage = public_path('images') . '/' . $game_section->mobile_image;
                if (file_exists($oldImage)) {
                    unlink($oldImage);
                }

                // Save the new image path to the model
                $game_section->mobile_image = "images/" . $imageName;
            }
            // Optionally, you might want to delete the old image if it exists
            if ($request->desktop_image) {

                $image = $request->file('desktop_image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('images'), $imageName);


                $oldImage = public_path('images') . '/' . $game_section->desktop_image;
                if (file_exists($oldImage)) {
                    unlink($oldImage);
                }

                // Save the new image path to the model
                $game_section->desktop_image = "images/" . $imageName;
            } 
        }

        $game_section->title= $request->title;
        $game_section->description= $request->description;
        $game_section->btn_link= $request->btn_link;
        $game_section->btn_name= $request->btn_name;
        $game_section->save();

        // dd($game_section);



        return redirect()->route('page.home')->with('success', 'Updated Successfully.');
    }

    /** features */

    public function store_seciv(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        HomeSectioniv::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->back()->with('success', 'New Feature added successfully!');
    }

    public function edit_seciv($id)
    {
        $data['feature'] = HomeSectioniv::find($id);
        return view('pages.home.edit-feature', $data);
    }

    public function update_seciv(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);
        $feature = HomeSectioniv::find($id);
        $feature->title = $request->title;
        $feature->description = $request->description;
        $feature->save();

        return redirect()->route('page.home')->with('success', 'Feature updated successfully!');
    }

    public function delete_seciv($id)
    {
        $feature = HomeSectioniv::where('id', $id)->firstOrFail();


        $feature->delete();

        return response()->json(['success' => 'Feature deleted successfully.']);
    }

    /** Advantages */
    public function store_advantage(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);


        $store = new HomeSectionv();
        $store->title = $request->title;
        $store->description = $request->description;
        $store->link = $request->link;

        // if ($request->has('listItems')) {
           
        //     $store->list = json_encode($request->listItems); // Store as JSON
        // }
    
        $store->save();

        return redirect()->back()->with('success', 'New Advantage added successfully!');
    }

    public function edit_advantage($id)
    {
        $data['feature'] = HomeSectionv::find($id);
        return view('pages.home.edit-advantage', $data);
    }

    public function update_advantage(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);
        $feature = HomeSectionv::find($id);
        $feature->title = $request->title;
        $feature->description = $request->description;
        $feature->link = $request->link;

        // if ($request->has('listItems')) {
        //     $feature->list = json_encode($request->listItems); 
        // } else {
        //     $feature->list= null; 
        // }

        $feature->save();

        return redirect()->route('pages.about')->with('success', 'Advantage updated successfully!');
    }

    public function delete_advantage($id)
    {
        $advantage = HomeSectionv::where('id', $id)->firstOrFail();


        $advantage->delete();

        return response()->json(['success' => 'Advantage deleted successfully.']);
    }

    /** featured on */

    public function store_featured(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        $feature = new Featured;
        $feature->title = $request->title;
        $path = 'images/blog/featured/';
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            // $request->image->storeAs($path, $imageName);
            // $feature->image = $imageName;

            $imageName = $request->image->getClientOriginalName();
            $request->image->move(public_path($path), $imageName);
            $feature->icon =  $path . $imageName;
            $feature->image =  $path . $imageName;
        }

        $feature->save();


        return redirect()->route('page.home')->with('success', 'Featured image created successfully.');
    }


    public function edit_featured($id)
    {
        $data['feature'] = Featured::find($id);
        return view('pages.home.edit-featured', $data);
    }

    public function update_featured(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $feature = Featured::find($id);
        $feature->title = $request->title;
        $path = 'images/featured/';
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($feature->image) {
                $oldImagePath = public_path('images/blog//featured/' . $feature->image);
                if (File::exists($oldImagePath)) {
                    File::delete($oldImagePath);
                }
            }

            // Save the new image
            // $imageName = $request->image->getClientOriginalName();
            // $request->image->move(public_path($path), $imageName);
            // $feature->image =  $path . $imageName;

            $imageName = $request->image->getClientOriginalName();
            $request->image->move(public_path($path), $imageName);
            $feature->image =  $path . $imageName;
        }

        $feature->save();

        return redirect()->route('page.home')->with('success', 'Blog updated successfully.');
    }

    public function delete_featured($id)
    {
        $featured = Featured::where('id', $id)->firstOrFail();


        $featured->delete();

        return response()->json(['success' => 'Featured image deleted successfully.']);
    }

    /** Question */
    public function store_question(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        Question::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->back()->with('success', 'New Question added successfully!');
    }

    public function edit_question($id)
    {
        $data['question'] = Question::find($id);
        return view('pages.home.edit-question', $data);
    }

    public function update_question(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',

        ]);
        $question = Question::find($id);
        $question->title = $request->title;
        $question->description = $request->description;
        $question->save();

        return redirect()->route('page.home')->with('success', 'Question updated successfully!');
    }

    /** Question Item */
    public function store_question_item(Request $request)
    {

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            "link_text" => 'required|string',
            "link" => 'required',
            "icon" => 'image|mimes:jpeg,png,jpg,gif,svg'
        ]);

        $image = "";
        $path = 'images/icons/';
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
        if ($request->hasFile('icon')) {
            // $imageName = time() . '.' . $request->icon->extension();
            // $request->icon->storeAs('public/images/icons/', $imageName);
            // $image = $imageName;

            $imageName = $request->image->getClientOriginalName();
            $request->image->move(public_path($path), $imageName);
            $image =  $path . $imageName;
        }

        QuestionItem::create([
            'title' => $request->title,
            'description' => $request->description,
            "link_text" => $request->link_text,
            "link" => $request->link,
            "icon" => $image,
        ]);

        return redirect()->back()->with('success', 'New Question added successfully!');
    }

    public function edit_question_item($id)
    {
        $data['questionItem'] = QuestionItem::find($id);
        return view('pages.home.edit-question_item', $data);
    }

    public function update_question_item(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            "link_text" => 'required|string|max:255',
            "link" => 'required',
            "icon" => 'image|mimes:jpeg,png,jpg,gif,svg'
        ]);

        $path = 'images/icons/';
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
        $questionItem = QuestionItem::find($id);
        $questionItem->title = $request->title;
        $questionItem->description = $request->description;
        $questionItem->link_text = $request->link_text;
        $questionItem->link = $request->link;
        if ($request->hasFile('icon')) {
            // Delete the old image if it exists
            if ($questionItem->icon) {
                $oldImagePath = public_path($path . $questionItem->icon);
                if (File::exists($oldImagePath)) {
                    File::delete($oldImagePath);
                }
            }

            // Save the new image
            // $imageName = time() . '.' . $request->icon->extension();
            // // $request->featured_image->move(public_path('images/blog'), $imageName);
            // $request->icon->storeAs('public/images/icons/', $imageName);
            // $questionItem->icon = $imageName;

            // Save the new image
            $imageName = $request->image->getClientOriginalName();
            $request->image->move(public_path($path), $imageName);
            $questionItem->icon =  $path . $imageName;
        }


        $questionItem->save();

        return redirect()->route('page.home')->with('success', 'Question Item updated successfully!');
    }

    public function delete_question_item($id)
    {
        $questionItem = QuestionItem::where('id', $id)->firstOrFail();


        $questionItem->delete();

        return response()->json(['success' => 'Question item deleted successfully.']);
    }

    /** About Page */

    public function about()
    {
        $data['about_header'] = AboutHeader::first();
        $data['about_second'] = AboutSecond::first();
        $data['team_header'] = TeamHeader::first();
        $data['teams'] = Team::paginate(5);
        $data['merchant'] = MerchantSection::first();
        $data['section_v'] = HomeSectionv::paginate(5);

        return view('pages.about.index', $data);
    }
    public function about_header_store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);


        $image = "";
        $path = 'images/about/icons';
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
        if ($request->hasFile('image')) {

            // $imageName = time() . '.' . $request->image->extension();
            // $request->icon->storeAs('public/images/about/icons', $imageName);
            // $image = $imageName;

            $imageName = $request->image->getClientOriginalName();
            $request->image->move(public_path($path), $imageName);
            $image =  $path . $imageName;
        }

        AboutHeader::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $image,
        ]);

        return redirect()->route('pages.about')->with('success', 'About header created successfully.');
    }



    // Update function to update the blog post and manage images
    public function about_header_update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        // $blog = AboutImage::findOrFail($id);
        $blog = AboutHeader::first();
        $blog->title = $request->title;
        $blog->description = $request->description;
        $path = 'images/about/icon/';
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($blog->image) {
                $oldImagePath = public_path($path . $blog->image);
                if (File::exists($oldImagePath)) {
                    File::delete($oldImagePath);
                }
            }

            // Save the new image
            // $imageName = time() . '.' . $request->image->extension();
            // $request->image->storeAs('public/images/about/icon/', $imageName);
            // $blog->image = $imageName;


            $imageName = $request->image->getClientOriginalName();
            $request->image->move(public_path($path), $imageName);
            $blog->image =  $path . $imageName;
        }
        $blog->save();

        return redirect()->route('pages.about')->with('success', 'About header updated successfully.');
    }

    /** About Second */
    public function sec_about_store(Request $request)
    {
        $request->validate([
            'description' => 'required',
            'sub_text' => 'nullable',
            'button_text' => 'nullable',
            'link_url' => 'nullable|url',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $image = "";
        $path = "images/about/icon";
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
        if ($request->hasFile('image')) {
            // $imageName = time() . '.' . $request->image->extension();
            // $request->image->storeAs('public/images/about/icon', $imageName);
            // $image = $imageName;

            $imageName = $request->image->getClientOriginalName();
            $request->image->move(public_path($path), $imageName);
            $image =  $path . $imageName;
        }

        AboutSecond::create([
            'title' => $request->title ? $request->title : "Second Title",
            'description' => $request->description,
            'sub_text' => $request->sub_text,
            'button_text' => $request->button_text,
            'link_url' => $request->link_url,
            'image' => $image,
        ]);

        return redirect()->route('pages.about')->with('success', 'About header created successfully.');
    }

    public function sec_about_update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'sub_text' => 'nullable',
            'button_text' => 'nullable',
            'link_url' => 'nullable|url',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $blog = AboutSecond::first();
        $blog->title = $request->title ? $request->title : "Second Title";
        $blog->description = $request->description;
        $blog->sub_text = $request->sub_text;
        $blog->button_text = $request->button_text;
        $blog->link_url = $request->link_url;
        $path = 'images/about/icon/';
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
        if ($request->hasFile('image')) {
            if ($blog->image) {
                $oldImagePath = public_path($path . $blog->image);
                if (File::exists($oldImagePath)) {
                    File::delete($oldImagePath);
                }
            }

            // $imageName = time() . '.' . $request->image->extension();
            // $request->image->storeAs('public/images/about/icon', $imageName);
            // $blog->image = $imageName;

            $imageName = $request->image->getClientOriginalName();
            $request->image->move(public_path($path), $imageName);
            $blog->image =  $path . $imageName;
        }

        $blog->save();

        return redirect()->route('pages.about')->with('success', 'About header updated successfully.');
    }

    /** Teams section */
    public function store_team_header(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        TeamHeader::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->route('pages.about')->with('success', 'Team header created successfully.');
    }


    public function update_team_header(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',

        ]);
        $team_header = TeamHeader::find($id);
        $team_header->title = $request->title;
        $team_header->description = $request->description;
        $team_header->save();

        return redirect()->route('pages.about')->with('success', 'Team header created successfully.');
    }

    /** Team */
    public function store_team(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'link' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'socials' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'job_desc' => 'required|string',
        ]);

        $team = new Team;
        $team->name = $request->name;
        $team->link = $request->link;
        $path = 'images/about/team/';
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
       
        if ($request->hasFile('image')) {
            $imageName = $request->image->getClientOriginalName();
            $request->image->move(public_path($path), $imageName);
            $team->image =  $path . $imageName;
        }

        if ($request->hasFile('socials')) {
            $imageName = $request->socials->getClientOriginalName();
            $request->socials->move(public_path($path), $imageName);
            $team->socials =  $path . $imageName;
        }

        $team->job_desc = $request->job_desc;
        $team->save();

        return redirect()->route('pages.about')->with('success', 'Team created successfully.');
    }


    public function edit_team($id)
    {
        $data['team'] = Team::find($id);
        return view('pages.about.edit-team', $data);
    }

    /**
     * Update the specified team in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update_team(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'link' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'socials' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'job_desc' => 'required|string',
        ]);

        $team = Team::findOrFail($id);
        $team->name = $request->name;
        $team->link = $request->link;
        $path = 'images/about/team/';
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
       
        if ($request->hasFile('image')) {
            $imageName = $request->image->getClientOriginalName();
            $request->image->move(public_path($path), $imageName);
            $team->image =  $path . $imageName;
        }

        if ($request->hasFile('socials')) {

            $imageName = $request->socials->getClientOriginalName();
            $request->socials->move(public_path($path), $imageName);
            $team->socials =  $path . $imageName;
        }

        $team->job_desc = $request->job_desc;
        $team->save();

        return redirect()->route('pages.about')->with('success', 'Team updated successfully.');
    }

    public function delete_team($id)
    {
        $team = Team::where('id', $id)->firstOrFail();


        $team->delete();

        return response()->json(['success' => 'Team member deleted successfully.']);
    }

    /** Merchant Section */
    public function store_merchant_header(Request $request)
    {

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            "button_text" => 'required|string',
            "link" => 'required',
        ]);


        MerchantSection::create([
            'title' => $request->title,
            'description' => $request->description,
            "button_text" => $request->link_text,
            "link" => $request->link,
        ]);

        return redirect()->back()->with('success', 'New Merchant added successfully!');
    }



    public function update_merchant_header(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            "button_text" => 'required|string',
            "link" => 'required',
        ]);
        $merchant = MerchantSection::find($id);
        $merchant->title = $request->title;
        $merchant->description = $request->description;
        $merchant->button_text = $request->button_text;
        $merchant->link = $request->link;
        $merchant->save();

        return redirect()->route('pages.about')->with('success', 'Question Item updated successfully!');
    }


    /** Road Map */
    public function road_map()
    {
        return  $this->indexData(RoadMap::class, 'pages.roadmap.index', 'roadMaps');
    }

    public function road_map_store(Request $request)
    {
        return $this->storeData(RoadMap::class, $request, 'road_map', 'RoadMap');
    }
    public function road_map_edit($id)
    {
        return $this->editData($id, RoadMap::class, 'roadMap', 'pages.roadmap.edit');
    }

    public function road_map_update(Request $request, $id)
    {
        return $this->updateData(RoadMap::class, $request, 'road_map', 'RoadMap', $id);
    }

    public function road_map_delete($id)
    {
        $roadmap = RoadMap::where('id', $id)->firstOrFail();


        $roadmap->delete();

        return response()->json(['success' => 'Roadmap deleted successfully.']);
    }

    public function storeData($modelName, $request, $route, $value)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $model = new $modelName;
        $model->title = $request->title;
        $model->description = $request->description;
        $model->save();
        return redirect()->route($route)->with('success', $value . ' added successfully!');
    }

    public function updateData($modelName, $request, $route, $value, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $model = $modelName::find($id);
        $model->title = $request->title;
        $model->description = $request->description;
        $model->save();
        return redirect()->route($route)->with('success', $value . ' updated successfully!');
    }

    public function indexData($modelName, $view, $dataName)
    {
        $data[$dataName] = $modelName::paginate(5);
        return view($view, $data);
    }

    public function editData($id, $modelName, $model, $view)
    {
        $data[$model] = $modelName::find($id);
        return view($view, $data);
    }


    public function store_Image($request, $modalName, $path, $msg, $route)
    {
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
        $request->validate([
            'title' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        $data = new $modalName;
        $data->title = $request->title;

        if ($request->hasFile('image')) {
            // $imageName = time() . '.' . $request->image->extension();
            // $request->image->storeAs('public/images/blog/featured/', $imageName);
            // $request->image->storeAs($path, $imageName);
            // $data->image = $imageName;

            $imageName = $request->image->getClientOriginalName();
            $request->image->move(public_path($path), $imageName);
            $data->image =  $path . $imageName;
        }



        $data->save();


        return redirect()->route($route)->with('success', $msg . ' created successfully.');
    }

    public function update_Image($request, $modalName, $path, $msg, $id, $route)
    {
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
        $request->validate([
            'title' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $data = $modalName::find($id);
        $data->title = $request->title;

        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($data->image) {
                // $oldImagePath = public_path('images/blog//featured/' . $data->image);
                $oldImagePath = public_path($path . '' . $data->image);
                if (File::exists($oldImagePath)) {
                    File::delete($oldImagePath);
                }
            }

            // Save the new image
            // $imageName = time() . '.' . $request->image->extension();
            // $request->image->storeAs($path, $imageName);
            // $data->image = $imageName;

            $imageName = $request->image->getClientOriginalName();
            $request->image->move(public_path($path), $imageName);
            $data->image =  $path . $imageName;
        }

        $data->save();

        return redirect()->route($route)->with('success', $msg . ' updated successfully.');
    }

    public function store_image_text($request, $modalName, $path, $msg, $route)
    {
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        $data = new $modalName;
        $data->title = $request->title;
        $data->description = $request->description;

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            // $request->image->storeAs('public/images/blog/featured/', $imageName);
            // $request->image->storeAs($path, $imageName);

            $imageName = $request->image->getClientOriginalName();
            $request->image->move(public_path($path), $imageName);
            $image =  $path . $imageName;


            $data->image = $imageName;
            
        }

        $data->save();


        return redirect()->route($route)->with('success', $msg . ' created successfully.');
    }

    public function update_image_text($request, $modalName, $path, $msg, $id, $route)
    {
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $data = $modalName::find($id);
        $data->title = $request->title;
        $data->description = $request->description;

        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($data->image) {
                // $oldImagePath = public_path('images/blog//featured/' . $data->image);
                $oldImagePath = public_path($path . '' . $data->image);
                if (File::exists($oldImagePath)) {
                    File::delete($oldImagePath);
                }
            }

            // Save the new image
            // $imageName = time() . '.' . $request->image->extension();
            // $request->image->storeAs($path, $imageName);
            // $data->image = $imageName;

            $imageName = $request->image->getClientOriginalName();
            $request->image->move(public_path($path), $imageName);
            $data->image =  $path . $imageName;
        }

        $data->save();

        return redirect()->route($route)->with('success', $msg . ' updated successfully.');
    }

    public function store_image_button($request, $modalName, $path, $msg, $route)
    {
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
        $request->validate([
            'title' => 'required',
            'button_text' => 'required',
            'link' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);


        $data = new $modalName;
        $data->title = $request->title;
        $data->button_text = $request->button_text;
        $data->link = $request->link;

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            
            // $request->image->storeAs('public/images/blog/featured/', $imageName);
            // $request->image->storeAs($path, $imageName);
            
            $imageName = $request->image->getClientOriginalName();
            $request->image->move(public_path($path), $imageName);
            $data->image =  $path . $imageName;

        }

        $data->save();


        return redirect()->route($route)->with('success', $msg . ' created successfully.');
    }

    public function update_image_button($request, $modalName, $path, $msg, $id, $route)
    {
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
        $request->validate([
            'title' => 'required',
            'button_text' => 'required',
            'link' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $data = $modalName::find($id);
        $data->title = $request->title;
        $data->button_text = $request->button_text;
        $data->link = $request->link;

        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($data->image) {
                // $oldImagePath = public_path('images/blog//featured/' . $data->image);
                $oldImagePath = public_path($path . '' . $data->image);
                if (File::exists($oldImagePath)) {
                    File::delete($oldImagePath);
                }
            }

            // Save the new image
            // $imageName = time() . '.' . $request->image->extension();
            // $request->image->storeAs($path, $imageName);
            // $data->image = $imageName;


            $imageName = $request->image->getClientOriginalName();
            $request->image->move(public_path($path), $imageName);
            $data->image =  $path . $imageName;
        }

        $data->save();

        return redirect()->route($route)->with('success', $msg . ' updated successfully.');
    }

    public function store_button_text($request, $modalName, $msg, $route)
    {
        $request->validate([
            'title' => 'required',
            'button_text' => 'required',
            'link' => 'required',
            'description' => 'required',
        ]);


        $data = new $modalName;
        $data->title = $request->title;
        $data->description = $request->description;
        $data->link = $request->link;
        $data->button_text = $request->button_text;
        $data->save();


        return redirect()->route($route)->with('success', $msg . ' created successfully.');
    }

    public function update_button_text($request, $modalName, $msg, $id, $route)
    {
        $request->validate([
            'title' => 'required',
            'button_text' => 'required',
            'link' => 'required',
            'description' => 'required',
        ]);

        $data = $modalName::find($id);
        $data->title = $request->title;
        $data->description = $request->description;
        $data->link = $request->link;
        $data->button_text = $request->button_text;
        $data->save();

        return redirect()->route($route)->with('success', $msg . ' updated successfully.');
    }

    public function store_image_button_text($request, $modalName, $msg, $route, $path)
    {
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
        $request->validate([
            'title' => 'required',
            'button_text' => 'required',
            'link' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);


        $data = new $modalName;
        $data->title = $request->title;
        $data->description = $request->description;
        $data->link = $request->link;
        $data->button_text = $request->button_text;
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            // $request->image->storeAs('public/images/blog/featured/', $imageName);
            // $request->image->storeAs($path, $imageName);

            $imageName = $request->image->getClientOriginalName();
            $request->image->move(public_path($path), $imageName);
            $data->image =  $path . $imageName;

        }
        $data->save();


        return redirect()->route($route)->with('success', $msg . ' created successfully.');
    }

    public function update_image_button_text($request, $modalName, $msg, $id, $route, $path)
    {
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
        $request->validate([
            'title' => 'required',
            'button_text' => 'required',
            'link' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $data = $modalName::find($id);
        $data->title = $request->title;
        $data->description = $request->description;
        $data->link = $request->link;
        $data->button_text = $request->button_text;
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($data->image) {
                // $oldImagePath = public_path('images/blog//featured/' . $data->image);
                $oldImagePath = public_path($path . '' . $data->image);
                if (File::exists($oldImagePath)) {
                    File::delete($oldImagePath);
                }
            }

            // Save the new image
            // $imageName = time() . '.' . $request->image->extension();
            // $request->image->storeAs($path, $imageName);
            // $data->image = $imageName;

            $imageName = $request->image->getClientOriginalName();
            $request->image->move(public_path($path), $imageName);
            $data->image =  $path . $imageName;
        }
        $data->save();

        return redirect()->route($route)->with('success', $msg . ' updated successfully.');
    }

    /** allocation data type */
    public function store_allo($request, $modalName, $msg, $route)
    {
        $request->validate([
            "allocation" => "required",
            "perentage" => "required",
            "token_amount" => "required",
            "vesting_period" => "required",
            'color' => 'required',
        ]);


        $data = new $modalName;
        $data->allocation = $request->allocation;
        $data->perentage = $request->perentage;
        $data->token_amount = $request->token_amount;
        $data->vesting_period = $request->vesting_period;
        $data->color = $request->color;
        $data->save();


        return redirect()->route($route)->with('success', $msg . ' created successfully.');
    }

    public function update_allo($request, $modalName, $msg, $id, $route)
    {
        $request->validate([
            "allocation" => "required",
            "perentage" => "required",
            "token_amount" => "required",
            "vesting_period" => "required",
            'color' => 'required',
        ]);

        $data = $modalName::find($id);
        $data->allocation = $request->allocation;
        $data->perentage = $request->perentage;
        $data->token_amount = $request->token_amount;
        $data->vesting_period = $request->vesting_period;
        $data->color = $request->color;
        $data->save();

        return redirect()->route($route)->with('success', $msg . ' updated successfully.');
    }
    public function delete_allo($request, $modalName, $msg, $id, $route)
    {
    
        $data = $modalName::find($id);
        $data->delete();

        return redirect()->route($route)->with('success', $msg . ' deleted successfully.');
    }



    /** Partners */
    public function partner_index()
    {
        return $this->indexData(Partner::class, 'pages.partner.index', 'partners');
    }

    public function partner_store(Request $request)
    {
        return $this->store_Image($request, Partner::class, 'images/partner/', "Partner", "partner.index");
    }

    public function partner_edit($id)
    {
        return $this->editData($id, Partner::class, 'partner', 'pages.partner.edit');
    }

    public function partner_delete(Request $request, Partner $partner)
    {
        $partner->delete();
        if ($request->ajax()) {
            return response()->json(['success' => true, 'message' => 'Deleted successfully']);
        }
        return redirect()->back()->with('success', 'Partner deleted successfully');
    }

    public function partner_update(Request $request, $id)
    {
        return $this->update_Image($request, Partner::class, 'images/partner/', "Partner", $id, "partner.index");
    }

    /** Merchant Marketing Service */
    public function merchant_service_index()
    {
        $data['merchant'] = MerchantService::first();
        $data['target_market'] = TargetMarket::first();
        $data['merchant_market'] = MerchantMerit::paginate(5);
        $data['promotion'] = Promote::first();

        return view('pages.merchant.index', $data);
    }

    public function merchant_service_store(Request $request)
    {
        return $this->store_image_text($request, MerchantService::class, 'images/merchant/', "merchant", "merchant-service.index");
    }

    public function merchant_service_update(Request $request, $id)
    {
        return $this->update_image_text($request, MerchantService::class, 'images/merchant/', "merchant", $id, "merchant_program.index");
        // return $this->update_image_text($request, MerchantService::class, 'images/merchant/', "merchant", $id, "merchant-service.index");
    }

    public function target_marketing_store(Request $request)
    {
        return $this->store_button_text($request, TargetMarket::class, "Target", "merchant-service.index");
    }

    public function target_marketing_update(Request $request, $id)
    {
        return $this->update_button_text($request, TargetMarket::class, "Target", $id, "merchant_program.index");
        // return $this->update_button_text($request, TargetMarket::class, "Target", $id, "merchant-service.index");
    }

    public function merchant_merit_edit($id)
    {
        return $this->editData($id, MerchantMerit::class, 'merchant', 'pages.merchant.edit');
    }

    public function merchant_merit_store(Request $request)
    {
        return $this->storeData(MerchantMerit::class, $request, "merchant_program.index", "Merchant Merit");
        // return $this->storeData(MerchantMerit::class, $request, "merchant-service.index", "Merchant Merit");
    }


    public function merchant_merit_update(Request $request, $id)
    {
        return $this->updateData(MerchantMerit::class, $request, "merchant_program.index", "Merchant Merit", $id);
        // return $this->updateData(MerchantMerit::class, $request, "merchant-service.index", "Merchant Merit", $id);
    }

    public function merchant_merit_delete($id)
    {
        $merchant = MerchantMerit::where('id', $id)->firstOrFail();


        $merchant->delete();

        return response()->json(['success' => 'Merchant Merit deleted successfully.']);
    }

    /** About promote section */
    public function promote_store(Request $request)
    {
        return $this->store_button_text($request, Promote::class, "Promote", "merchant-service.index");
    }

    public function promote_update(Request $request, $id)
    {
        return $this->update_button_text($request, Promote::class, "promote", $id, "merchant_program.index");
        // return $this->update_button_text($request, Promote::class, "promote", $id, "merchant-service.index");
    }

    /** Token */
    #Pns Token 
    public function pns_token_index()
    {
        $data['pns_token'] = PnsToken::first();
        $data['pns'] = PnsUtility::first();
        $data['pnsItems'] = PnsItem::paginate(5);
        $data['exclusive'] = Exclusive::first();
        $data['exchange'] = Exchange::first();
        $data['wallets'] = Wallet::paginate(5);
        $data['allocations'] = Allocation::paginate(5);

        return view("pages.token.pns_token.index", $data);
    }

    public function pns_token_store(Request $request)
    {
        return $this->store_image_text($request, PnsUtility::class, 'images/token/', 'pns_token', 'pns_token.index');
    }

    public function pns_token_update(Request $request, $id)
    {
        return $this->update_image_text($request, PnsUtility::class, 'images/token/', 'pns_token', $id, 'pns_token.index');
    }

    public function updatePnsToken(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'ico_button_text' => 'required|string|max:255',
            'ico_button_url' => 'nullable|url',
            'white_paper_button_text' => 'nullable|string|max:255',
            'white_paper' => 'nullable|file|mimes:pdf|max:7168',

        ]);

        // dd($request->all());

        // Fetch the PnsToken record by its ID
        $pnsToken = PnsToken::findOrFail($id);

        // Update the attributes with the request data
        $pnsToken->ico_button_text = $request->input('ico_button_text');
        $pnsToken->ico_button_url = $request->input('ico_button_url');
        $pnsToken->white_paper_button_text = $request->input('white_paper_button_text');

        // Handle the white paper file upload if present
        // if ($request->hasFile('white_paper')) {
        //     // Delete the existing white paper file if it exists
        //     if ($pnsToken->white_paper && Storage::disk('public')->exists($pnsToken->white_paper)) {
        //         Storage::disk('public')->delete($pnsToken->white_paper);
        //     }

        //     // Store the new white paper file
        //     $whitePaperPath = $request->file('white_paper')->store('white_papers', 'public');
        //     $pnsToken->white_paper = '/storage/'. $whitePaperPath;
        // }


        if ($request->hasFile('white_paper')) {
            // Delete the old file if it exists
            if ($pnsToken->white_paper && file_exists(public_path($pnsToken->white_paper))) {
                unlink(public_path($pnsToken->white_paper));
            }
        
            // Move new file to public directory with a fixed name
            $whitePaper = $request->file('white_paper');
            $whitePaper->move(public_path(), 'whitepaper.pdf');
        
            // Save path (without extension for cleaner URL if using a route)
            $pnsToken->white_paper = 'whitepaper.pdf';
        }

        // Save the updated record
        $pnsToken->save();

        // Redirect to the index page with a success message
        return redirect()->route('pns_token.index')->with('success', 'PNS Token updated successfully.');
    }

    

    #pns item
    public function pns_item_store(Request $request)
    {
        return $this->storeData(PnsItem::class, $request, 'pns_token.index', 'pns item');
    }

    public function pns_item_edit($id)
    {
        return $this->editData($id, PnsItem::class, 'pnsItem', 'pages.token.pns_token.edit.pns_item');
    }

    public function pns_item_update(Request $request, $id)
    {
        return $this->updateData(PnsItem::class, $request, 'pns_token.index', 'pns item', $id);
    }

    public function pns_item_delete(Request $request,  PnsItem $pnsItem)
    {
        $pnsItem->delete();
        if ($request->ajax()) {
            return response()->json(['success' => true, 'message' => 'Deleted successfully']);
        }
        return redirect()->back()->with('success', 'Pns item deleted successfully');
    }

    #pns exclusive
    public function exclusive_store(Request $request)
    {
        return $this->storeData(Exclusive::class, $request, 'pns_token.index', 'exclusive');
    }
    public function exclusive_update(Request $request, $id)
    {
        return $this->updateData(Exclusive::class, $request, 'pns_token.index', 'exclusive', $id);
    }

    #exchange
    public function exchange_store(Request $request)
    {
        return $this->store_image_button($request, Exchange::class, "images/token/", "Exchange", "pns_token.index");
    }

    public function exchange_update(Request $request, $id)
    {
        return $this->update_image_button($request, Exchange::class, "images/token/", "Exchange", $id, "pns_token.index");
    }

    #wallet
    public function wallet_store(Request $request)
    {
        return $this->store_image_button($request, Wallet::class, "images/token/", "Wallet", "pns_token.index");
    }

    public function wallet_edit($id)
    {
        return $this->editData($id, Wallet::class, 'wallet', 'pages.token.pns_token.edit.wallet');
    }

    public function wallet_update(Request $request, $id)
    {
        return $this->update_image_button($request, Wallet::class, "images/token/", "Wallet", $id, "pns_token.index");
    }

    public function wallet_delete($id)
    {
        $wallet = Wallet::where('id', $id)->firstOrFail();


        $wallet->delete();

        return response()->json(['success' => 'Wallet deleted successfully.']);
    }

    #allocation
    public function allocation_store(Request $request)
    {
        return $this->store_allo($request, Allocation::class, "Allocation", "pns_token.index");
    }

    public function allocation_edit($id)
    {
        return $this->editData($id, Allocation::class, 'allocation', 'pages.token.pns_token.edit.allocation');
    }

    public function allocation_update(Request $request, $id)
    {
        return $this->update_allo($request, Allocation::class, "Allocation", $id, "pns_token.index");
    }
    public function allocation_delete($id)
    {

        if (Allocation::count() <= 5) {
            return back()->with('success', 'Re-try ' . 'Try editing the allocation, remaining rows must be 5.');

        }
        $data = Allocation::find($id);
        $data->delete();

        return back()->with('success', 'Success ' . 'deleted Successfully.');

    }

    /** loyalty program */
    public function loyalty_index()
    {
        $data['loyaltyProgram'] = LoyaltyProgram::first();
        $data['loyaltyItems'] = LoyaltyItem::paginate(5);
        $data['offer'] = Offer::first();
        return view("pages.token.loyalty.index", $data);
    }

    public function loyalty_store(Request $request)
    {
        return $this->store_image_text($request, LoyaltyProgram::class, "images/loyalty/", "loyalty", "loyalty.index");
    }

    public function loyalty_update(Request $request, $id)
    {
        return $this->update_image_text($request, LoyaltyProgram::class, "images/loyalty/", "loyalty", $id, "loyalty.index");
    }

    #loyalty items
    public function loyalty_item_store(Request $request)
    {
        return $this->storeData(LoyaltyItem::class, $request, "loyalty.index", "loyalty");
    }

    public function loyalty_item_edit($id)
    {
        return $this->editData($id, LoyaltyItem::class, 'loyaltyItem', 'pages.token.loyalty.edit.loyalty_item');
    }

    public function loyalty_item_update(Request $request, $id)
    {
        return $this->updateData(LoyaltyItem::class, $request, "loyalty.index", "loyalty", $id);
    }

    public function loyalty_item_delete($id)
    {
        $loyalty = LoyaltyItem::where('id', $id)->firstOrFail();


        $loyalty->delete();

        return response()->json(['success' => 'Loyalty deleted successfully.']);
    }

    #offers
    public function offer_store(Request $request)
    {
        return $this->store_image_button_text($request, Offer::class, "Offer", "loyalty.index", "images/loyalty/");
    }

    public function offer_edit($id)
    {
        return $this->editData($id, LoyaltyItem::class, 'offer', 'pages.token.loyalty.edit.offer');
    }

    public function offer_update(Request $request, $id)
    {
        return $this->update_image_button_text($request, Offer::class, "Offer", $id, "loyalty.index", "images/loyalty/");
    }

    /** merchant program */
    public function  merchant_program_index()
    {
        $data['merchantProgram'] = MerchantProgram::first();
        $data['brand'] = Brand::first();
        $data['collab'] = Collaborative::first();
        $data['extensive'] = Extensive::first();
        $data['together'] = Together::first();
        $data['merchantItems'] = MerchantItem::paginate(5);
        $data['mass'] = Mass::first();

        $data['merchant'] = MerchantService::first();
        $data['target_market'] = TargetMarket::first();
        $data['merchant_market'] = MerchantMerit::paginate(5);
        $data['promotion'] = Promote::first();


        return view("pages.merchant_program.index", $data);
    }

    #merchant program header
    public function merchant_program_store(Request $request)
    {
        return $this->store_image_text($request, MerchantProgram::class, "images/merchant/", "merchant program", "merchant_program.index");
    }

    public function merchant_program_update(Request $request, $id)
    {
        return $this->update_image_text($request, MerchantProgram::class, "images/merchant/", "merchant program", $id, "merchant_program.index");
    }

    #brand
    public function brand_store(Request $request)
    {
        return $this->store_image_text($request, Brand::class, "images/merchant/", "Brand", "merchant_program.index");
    }

    public function brand_update(Request $request, $id)
    {
        return $this->update_image_text($request, Brand::class, "images/merchant/", "Brand", $id, "merchant_program.index");
    }

    #collab
    public function collab_store(Request $request)
    {
        return $this->store_image_text($request, Collaborative::class, "images/merchant/", "Collaboration", "merchant_program.index");
    }

    public function collab_update(Request $request, $id)
    {
        return $this->update_image_text($request, Collaborative::class, "images/merchant/", "Collaboration", $id, "merchant_program.index");
    }

    #Extensive
    public function extensive_store(Request $request)
    {
        return $this->storeData(Extensive::class, $request, "merchant_program.index", "Extensive Marketing");
    }

    public function extensive_update(Request $request, $id)
    {
        return $this->updateData(Extensive::class, $request, "merchant_program.index", "Extensive Marketing", $id);
    }

    #merchantItem
    public function merchant_item_store(Request $request)
    {
        return $this->store_Image($request, MerchantItem::class, "images/merchant/", "Merchant Item", "merchant_program.index");
    }

    public function merchant_item_edit($id)
    {
        return $this->editData($id, MerchantItem::class, 'merchantItem', "pages.merchant_program.edit.merchant_item");
    }

    public function merchant_item_update(Request $request, $id)
    {
        return $this->update_Image($request, MerchantItem::class, "images/merchant/", "Merchant Item", $id, "merchant_program.index");
    }

    public function merchant_item_delete($id)
    {
        $merchantItem = MerchantItem::where('id', $id)->firstOrFail();


        $merchantItem->delete();

        return response()->json(['success' => 'Item deleted successfully.']);
    }

    #together
    public function together_store(Request $request)
    {
        return $this->store_button_text($request, Together::class, "Together", "merchant_program.index");
    }

    public function together_update(Request $request, $id)
    {
        return $this->update_button_text($request, Together::class, "Together", $id, "merchant_program.index");
    }

    #Mass
    public function mass_store(Request $request)
    {
        return $this->store_image_button_text($request, Mass::class, "Mass", "merchant_program.index", 'images/mass/');
    }

    public function mass_update(Request $request, $id)
    {
        return $this->update_image_button_text($request, Mass::class, "Mass", $id, "merchant_program.index", 'images/mass/');
    }

    /** Cryptocurrency Payment Gateway */
    public function crypto_index()
    {
        $data['crypo'] = Cryptocurrency::first();
        $data['crypoImage'] = CryptoImage::first();
        $data['cryptoBenefits'] = CryptoBenefit::paginate(5);
        $data['cryptoItems'] = CryptoItem::paginate(5);
        $data['exceptional'] = Exceptional::first();
        $data['promoteBusiness'] = PromoteBussiness::first();
        return view("pages.currency.index", $data);
    }

    #crypto header
    public function crypto_store(Request $request)
    {
        return $this->storeData(Cryptocurrency::class, $request, "cryptocurrency.index", "Crypto");
    }

    public function crypto_update(Request $request, $id)
    {
        return $this->updateData(Cryptocurrency::class, $request, "cryptocurrency.index", "Crypto", $id);
    }

    #crypto image
    public function crypto_store_image(Request $request)
    {
        return $this->store_Image($request, CryptoImage::class, 'images/crypto/', "Crypto", "cryptocurrency.index");
    }

    public function crypto_update_image(Request $request, $id)
    {
        return $this->update_Image($request, CryptoImage::class, 'images/crypto/', "Crypto", $id, "cryptocurrency.index");
    }

    #crypto benefit
    public function crypto_benefit_store(Request $request)
    {
        return $this->storeData(CryptoBenefit::class, $request, "cryptocurrency.index", "Crypto");
    }

    public function crypto_benefit_edit($id)
    {
        return $this->editData($id, CryptoBenefit::class, "cryptoBenefit", "pages.currency.edit.benefit_edit");
    }

    public function crypto_benefit_update(Request $request, $id)
    {
        return $this->updateData(CryptoBenefit::class, $request, "cryptocurrency.index", "Crypto", $id);
    }

    public function crypto_benefit_delete($id)
    {

        $benefit = CryptoBenefit::where('id', $id)->firstOrFail();


        $benefit->delete();

        return response()->json(['success' => 'Crypto Benefit deleted successfully.']);
    }

    #exceptional
    public function exceptional_store(Request $request)
    {
        return $this->storeData(Exceptional::class, $request, "cryptocurrency.index", "Exceptional");
    }

    public function exceptional_update(Request $request, $id)
    {
        return $this->updateData(Exceptional::class, $request, "cryptocurrency.index", "Exceptional", $id);
    }

    #cryptoItem

    public function cryptoItem_store(Request $request)
    {
        return $this->storeData(CryptoItem::class, $request, "cryptocurrency.index", "Crypto Item");
    }

    public function cryptoItem_edit($id)
    {
        return $this->editData($id, CryptoItem::class, "cryptoItem", "pages.currency.edit.cypto_edit");
    }

    public function cryptoItem_update(Request $request, $id)
    {
        return $this->updateData(CryptoItem::class, $request, "cryptocurrency.index", "Crypto Item", $id);
    }

    public function cryptoItem_delete($id)
    {
        $item = CryptoItem::where('id', $id)->firstOrFail();


        $item->delete();

        return response()->json(['success' => 'Crypto Item deleted successfully.']);
    }

    #PromoteBusiness
    public function promoteBusiness_store(Request $request)
    {
        return $this->store_button_text($request, PromoteBussiness::class, "Promote Business", "merchant-service.index");
    }

    public function promoteBusiness_update(Request $request, $id)
    {
        return $this->update_button_text($request, PromoteBussiness::class, "Promote Business", $id, "merchant-service.index");
    }
}
