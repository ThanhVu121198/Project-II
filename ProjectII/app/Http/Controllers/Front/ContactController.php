<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index() {
        return view('front.contact.index');
    }

    public function store(Request $request) {
        $data = $request->all();
        Contact::create($data);
        return view('front.contact.index');
    }

    public function storeNew(ContactRequest $request) {
        $contact = new Contact();
        $contact->first_name = $request->first_name;
        $contact->last_name = $request->last_name;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->mess = $request->mess;
        $contact->save();
        session()->flash('success','Submit success');
        return view('front.contact.index');
    }
}
