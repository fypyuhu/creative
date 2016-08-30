<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Contact;
class ContactController extends Controller
{
    //


    function postContact(Request $request){
            $contact = new  Contact();
            $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();

        return redirect()->back()->withErrors(['message'=>'Successfully Send']);
    }
}
