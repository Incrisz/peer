<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Round;
use Illuminate\Http\Request;

class RoundController extends Controller
{
    public function storeOrUpdate(Request $request, $id = null)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'stake_price' => 'required|numeric|min:0',
            'raised_price' => 'required|numeric|min:0',
            'sold_allocation' => 'required|numeric|min:0',
            'currency' => 'required|string|max:10',
        ]);

        try {
            
            $round = Round::updateOrCreate(
                ['id' => $id], 
                $validated    
            );
    
            return response()->json([
                'success' => true,
                'message' => $round->wasRecentlyCreated ? 'Round created successfully.' : 'Round updated successfully.',
                'data' => $round,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'An error occurred: ' . $e->getMessage(),
            ], 500);
        }
    }

    public function showRounds()
    {
        $rounds = Round::all();

        return response()->json([
            'success' => true,
            'message' => 'Rounds retrieved successfully.',
            'data' => $rounds,
        ], 200);
    }

    
}
