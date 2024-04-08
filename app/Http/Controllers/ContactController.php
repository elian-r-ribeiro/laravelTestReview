<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $contacts = Contact::all();

        return view('ContactsList', compact('contacts'));
    }

    public function newContact(){
        $contact = new Contact();

        $contact->name = ("Alala");
        $contact->email = ("aaaaaaa@gmail.com");
        $contact->phoneNumber = ("1234567890");
        $contact->birthDate = ("2004-05-29");

        $contact->save();
    }

    public function updateContact(){
        $contact = Contact::find(2);
        $contact->name = "El Ribeiro";
        $contact->save();
    }
}
