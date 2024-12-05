<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    
    public function index()
    {

        $contacts = Contact::all();

        return view('contacts.index', [
            'contacts' => $contacts
        ]);

    }

    public function show($contactId)
    {

        $contact = Contact::find($contactId);

        return view('contacts.show', [
            'contact' => $contact
        ]);

    }

    public function create()
    {

        return view('contacts.create');

    }

    public function store(StoreContactRequest $request)
    {

        Contact::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'contact' => $request['contact'],
        ]);

        $contacts = Contact::all();

        return to_route('contacts.index', ['contacts' => $contacts]);

    }

    public function edit($contactId)
    {

        $contact = Contact::find($contactId);

        return view('contacts.edit', [
            'contact' => $contact
        ]);

    }

    public function update(UpdateContactRequest $request, $contactId)
    {

        $contact = Contact::find($contactId);

        $contact->name = $request['name'];
        $contact->email = $request['email'];
        $contact->contact = $request['contact'];

        $contact->save();

        $contacts = Contact::all();

        return to_route('contacts.index', ['contacts' => $contacts]);

    }

    public function delete($contactId)
    {

        $contact = Contact::find($contactId);

        $contact->delete();

        $contacts = Contact::all();

        return to_route('contacts.index', ['contacts' => $contacts]);

    }

}
