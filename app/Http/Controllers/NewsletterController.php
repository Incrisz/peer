<?php

namespace App\Http\Controllers;

use App\Facades\BrevoFacade;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function subscribe(Request $request)
    {
        $res = BrevoFacade::createContact($request->email);
        if($request->ajax()){
            return response()->json(['status' => 'success']);
        }
        return redirect()->back()->with('Subscription successfull');
    }

   
}
