<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Contact;
class ContactController extends Controller
{
    //

    function getIndex(){

        $contacts = Contact::paginate(20);

        return view('admin.contact.index',compact('contacts'));
    }

    function getDelete($id){

        $contact = Contact::findOrFail($id);
        $contact->delete();
        return redirect()->back()->withErrors(['message'=>'Successfully Deleted']);
    }
}
