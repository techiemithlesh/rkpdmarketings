<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submitEnquiry(Request $request){
        // return $request;
        $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'email',
            // 'phone' => 'numeric',
            'message' => 'string'
        ]);

        Contact::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);

        return redirect()->back()->with('message', 'Enquiry Submitted Successfully!');
    }
}
