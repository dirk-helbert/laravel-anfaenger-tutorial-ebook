<?php

namespace App\Http\Controllers;

use App\Mail\ContactSent;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contacts.index');
    }

    public function submit(Request $request)
    {
        $contact = new Contact();
        $contact->name = request('name');
        $contact->email = request('email');
        $contact->message = request('message');
        $contact->save();

        Mail::to(request('email'))->send(new ContactSent($request));
 
        return view('contacts.sent');
    }
}
