<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Mail\ContactSent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

	public function index() {
		return view('contact.index');
    }

	public function submit(Request $request) {
		$contact = new Contact();
		$contact->name = $request->input('name');
		$contact->email = $request->input('email');
		$contact->subject = $request->input('subject');
		$contact->message = $request->input('message');
		$contact->save();

		Mail::to($request->input('email'))->send(new ContactSent($request));
		return view('contact.sent');
    }
}
