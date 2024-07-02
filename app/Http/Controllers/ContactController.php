<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(ContactRequest $req) {
        $contact = new Contact();
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');
        $contact->save();

        return redirect()->route('home')->with('success', 'Thank you for your message!');
    }

    public function all_contacts() {
        //$contact = new Contact();
        //$contact->all();
        $contacts = Contact::all();
        return view('all_contacts', ['contact_list' => $contacts]);
    }
}
