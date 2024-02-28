<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EnquirySendMail;
use Illuminate\Support\Facades\Route;
use App\Models\Enquiry;
class EnquiryController extends Controller
{
    public function enquiry(Request $request){
        //echo '<pre>'; print_r($request->all()); die;
        $enquiry= new Enquiry();
        $enquiry->name = $request->name ?? Null ;
        $enquiry->pname = $request->pname ?? Null ;
        $enquiry->email = $request->email ?? Null;
        $enquiry->phone = $request->phone ?? Null;
        $enquiry->address = $request->address ?? Null;
        $enquiry->comment = $request->comment ?? Null;
        $enquiry->save();

       // Send email
       Mail::to('info@sirs.org.in')->send(new EnquirySendMail([
            'name' => $request->name ?? Null,
            'pname' => $request->pname ?? Null,
            'email' => $request->email ?? Null,
            'phone' => $request->phone ?? Null,
            'address' => $request->address ?? Null,
            'comment' => $request->comment ?? Null,
        ]));

       
        return redirect()->route('home.enquiry_send');
    }


    



}
