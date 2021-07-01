<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function submit(ContactRequest $req) {
        
        $contact = new Contact();
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->text = $req->input('text');

        $contact->save();

        return redirect()->route('home')->with('success', 'Сообщение было доставлено');
    }
}
