<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PolygonNetworkService;

class BlockchainController extends Controller
{
    protected $polygonNetworkService;

    public function __construct(PolygonNetworkService $polygonNetworkService)
    {
        $this->polygonNetworkService = $polygonNetworkService;
    }

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
