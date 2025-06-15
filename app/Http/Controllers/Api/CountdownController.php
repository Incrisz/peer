<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Countdown;
use Illuminate\Http\Request;

class CountdownController extends Controller
{
    //

    public function storeOrUpdateCountdown(Request $request, $id=null)
    {
        $validated = $request->validate([
            'days' => 'required|integer|min:0',
            'hours' => 'required|integer|min:0|max:23',
            'minutes' => 'required|integer|min:0|max:59',
            'seconds' => 'required|integer|min:0|max:59',
            'post_countdown_price' => 'required|numeric|min:0',
            'currency' => 'required|string|max:10',
        ]);

        
        $countdown = Countdown::updateOrCreate(
            ['id' => $id],
            [
                'days' => $validated['days'],
                'hours' => $validated['hours'],
                'minutes' => $validated['minutes'],
                'seconds' => $validated['seconds'],
                'post_countdown_price' => $validated['post_countdown_price'],
                'currency' => $validated['currency'],
            ]
        );

        return response()->json([
            'success' => true,
            'message' => $countdown->wasRecentlyCreated ? 'Countdown created successfully.' : 'Countdown updated successfully.',
            'data' => $countdown,
        ], 200);
    }

    public function getCountdown($id = null)
    {
        if ($id) {
            $countdown = Countdown::find($id);

            if (!$countdown) {
                return response()->json([
                    'success' => false,
                    'message' => 'Countdown not found.',
                ], 404);
            }

            return response()->json([
                'success' => true,
                'data' => [
                    'id' => $countdown->id,
                    'days' => $countdown->days,
                    'hours' => $countdown->hours,
                    'minutes' => $countdown->minutes,
                    'seconds' => $countdown->seconds,
                    'post_countdown_price' => $countdown->post_countdown_price,
                    'currency' => $countdown->currency,
                ],
            ], 200);
        }

        $countdowns = Countdown::select('id', 'days', 'hours', 'minutes', 'seconds', 'post_countdown_price','currency')->get();

        return response()->json([
            'success' => true,
            'data' => $countdowns,
        ], 200);
    }


}
