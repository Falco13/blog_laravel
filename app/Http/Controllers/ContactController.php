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

    public function detail_message($id) {
        $contact = new Contact();
        return view('detail_message', ['contact_one' => $contact->find($id)]);
    }

    public function update_message($id) {
        $contact = new Contact();
        return view('update_message', ['contact_one' => $contact->find($id)]);
    }

    public function update_message_submit($id, Request $req) {
        $contact = Contact::find($id);
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');
        $contact->save();

        return redirect()->route('detail_message', $id)->with('success', 'Thank you for your update!');
    }

    public function delete_message($id) {
        Contact::find($id)->delete();
        return redirect()->route('all_contacts')->with('success', 'Your message has been deleted!');
    }
}
