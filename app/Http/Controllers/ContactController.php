<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function formcontact(){
        return view('contact-us');
    }

    public function formcreate(Request $request){
        $request->validate([
            
            'name' => 'required',
            'email'=> 'required',
            'subject'=> 'required',
            'message'=> 'required',
        ]);

        $contact = new Contact();
        $contact->name = $request ->name;
        $contact->email = $request ->email;
        $contact->subject = $request ->subject;
        $contact->message = $request ->message;

        $contact->save();

        return redirect()->route('contact-us')->with('success', 'sent successfully');
    }
}
