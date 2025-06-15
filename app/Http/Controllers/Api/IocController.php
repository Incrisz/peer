<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Countdown;
use App\Models\Ioc;
use App\Models\IocTimer;
use App\Models\Round;
use App\Services\PolygonNetworkService;
use Illuminate\Http\Request;

class IocController extends Controller
{
    protected $polygonNetworkService;
    

    public function getCountdown(Request $request)
    {

            $ioc = IocTimer::latest()->first();
            // dd($ioc);
            return response()->json([
                'success' => true,
                'data' => [
                    'id' => $ioc->id,
                    'date' => $ioc->date,
                    'time' => $ioc->time,
                    'post_countdown_price' => $ioc->post_countdown_price,
                ],
            ], 200);
        

        $ioc = Ioc::select('id','date', 'time','post_countdown_price')->get();        
    }


    public function getRounds($id = null)
    {

        if ($id) {
            $round = Ioc::find($id);

            return response()->json([
                'success' => true,
                'data' => [
                    'id' => $round->id,
                    'title' => $round->title,
                    'stake_price' => $round->stake_price,
                    'raised_price' => $round->raised_price,
                    'sold_allocation' => $round->sold_allocation,
                    'currency' => $round->currency,
                      
                ],
            ], 200);
            
        }

        if ($id == null) {
            
            $round = Ioc::select('id','title', 'stake_price', 'raised_price', 'sold_allocation', 'currency')->latest()->get();        

            return response()->json([
                'success' => true,
                'data' => [
                    'round' => $round,
                ],
            ], 200);
        }
        
    }

  
    public function __construct(PolygonNetworkService $polygonNetworkService)
    {
        $this->polygonNetworkService = $polygonNetworkService;
    }

    // function to get transactions on the blockchain
    public function getTransactions(Request $request)
    {
        $contractAddress = $request->input('contract_address');

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


    
   
}
