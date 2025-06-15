<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Braintree\Plan;
use Braintree\Gateway;

class BraintreeController extends Controller
{

    public function fetchPlans()
    {
        $gateway = new Gateway([
            'environment' => env('BRAINTREE_ENV'),
            'merchantId' => env('BRAINTREE_MERCHANT_ID'),
            'publicKey' => env('BRAINTREE_PUBLIC_KEY'),
            'privateKey' => env('BRAINTREE_PRIVATE_KEY'),
        ]);

        $plans = $gateway->plan()->all();

        return view('braintree.plans', compact('plans'));
    }
}
