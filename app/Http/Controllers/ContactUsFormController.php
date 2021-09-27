<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUs;
use Mail;

class ContactUsFormController extends Controller
{
    //
    public function createForm(Request $request) {
        return view('contactUs');
      }
  
      // Store Contact Form data
      public function ContactUsForm(Request $request) {
  
        // Form validation
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|min:10',
            'need'=>'required',
            'message' => 'required'
         ]);

        //  Store data in database
        ContactUs::create($request->all());

        //  Send mail to admin
        \Mail::send('mail', array(
            'name' => $request->get('first_name'),
            'email' => $request->get('email'),
            'subject' => $request->get('need'),
            'user_query' => $request->get('message'),
        ), function($message) use ($request){
            $message->from('balwindersingh4264@gmail.com');
            $message->to('balwindersingh4264@gmail.com')->subject($request->get('email'));
        });

        return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
    }
}
