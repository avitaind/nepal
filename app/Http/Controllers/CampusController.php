<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;


use App\Http\Requests;

use App\Campus;



class CampusController extends Controller
{
    public function index(){

        return view('campus');
    }
 
  
    public function storeDevice(Request $request){

        $this->validate($request, [
            'name' =>  'required',
            'email' =>  'required',
            'phone' =>  'required',
            'internship' =>  'required',
            'college' =>  'required',
            'team' =>  'required',
            'represent' =>  'required',

            ]);
     
        $campus = new Campus([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'internship' => $request->get('internship'),
            'college' => $request->get('college'),
            'team' => $request->get('team'),
            'represent' => $request->get('represent'),
        
        ]);

        $campus->save();

        \Mail::send('emails.campus',
        array(
            'name' => $request->get('name'),
         
        ), function ($message) use ($request)
        {
            $email = $request->input('email');
            $name = $request->input('name');
            $message->from('contact@avita-india.com','Campus Ambassador Program');
            $message->to($email, $name)->subject('Campus Ambassador Program');
            $message->to('avitacampusambassador@gmail.com', 'AVITA Campus Ambassador Program');
            $message->replyTo('avitacampusambassador@gmail.com', 'AVITA Campus Ambassador Program');
            $message->replyTo('contact@avita-india.com', 'AVITA INDIA');
        });
     
        return redirect()->back()->with('message', 'Thank you for your submission. You shall receive a confirmation mail shortly!');

    }

     
}
