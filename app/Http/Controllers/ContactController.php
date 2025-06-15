<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Yajra\DataTables\Facades\DataTables;

class ContactController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function submit(ContactRequest $request)
    {


        // dd($request->all());

        $payload = $request->validated();
        Contact::create( $payload);


         // Send email with contact details
         if($payload['type'] == 'support'){
            Mail::to('support@peernetics.io')->send(new ContactMail($payload));
         }
         if($payload['type'] == 'enquiry'){
            Mail::to('info@peernetics.io')->send(new ContactMail($payload));
         }

         if($payload['type'] == 'complaint'){
            Mail::to(' complaints@peernetics.io')->send(new ContactMail($payload));
         }


        if($request->ajax()){
            return response()->json(['status' => 'success']);
        }
        return redirect()->back()->with('Contact submitted successfull');
    }


    /**
     * Display the user's profile form.
     */
    public function index(Request $request)
    {
        $contactQuery = Contact::query();
        if ($request->ajax()) {
            return DataTables::of($contactQuery)
            ->addIndexColumn()
            ->addColumn('action', function($row){

                $showUrl = route('voyager.admin.contacts.show', $row->id);
                $btn = " <a href='$showUrl' style='margin-right:2px' class='btn m- btn-primary btn-xs'><i class='voyager-eye'></i></a>";
                // $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-sm btn-outline-light deleteRecord"><i class="far fa-trash-alt btn-outline-danger"></i></a>';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }

        $contacts =  $contactQuery->paginate(30);
        return view('contact.index', compact('contacts'));
    }

}
