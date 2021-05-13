<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SalesEnquiry;
use Illuminate\Support\Facades\Mail;

use App\Http\Requests;  

class SalesEnquiryController extends Controller
{
    //

    public function salesEnquiry(){
        return view('pages.sales_enquiry');
    }

    public function enquirySaveData(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone'=>'required',
            'enquiry' => 'required'
            ]);

            SalesEnquiry::create($request->all());
            \Mail::send('emails.salesenquiry',
            array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'phone' => $request->get('phone'),
                'enquiry' => $request->get('enquiry')
            ), function($message) use ($request)
        {
           $message->from($request->get('email'));
           $message->to('contact@avita-india.com', 'Admin')->subject('Sales Enquiry Received on AVITA INDIA');
        });
        return redirect()->back()->with('message', 'Thank you for your enquiry you will receive a mail shortly!');

    }
}
