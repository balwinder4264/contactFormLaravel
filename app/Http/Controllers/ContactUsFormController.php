<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUs;

class ContactUsFormController extends Controller
{
    //
    public function createForm(Request $request) {
        return view('contact');
      }
  
      // Store Contact Form data
    
}
