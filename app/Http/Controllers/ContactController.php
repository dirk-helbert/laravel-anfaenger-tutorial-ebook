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
		$contact->name = request('name');
		$contact->email = request('email');
		$contact->message = request('message');
		$contact->save();

		Mail::to(request('email'))->send(new ContactSent($request));

		return view('contact.sent');
    }
}
