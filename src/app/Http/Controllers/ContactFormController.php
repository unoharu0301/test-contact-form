<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactFormController extends Controller
{
    public function index(){
        return view('index');
    }

    public function confirm(Request $request){
        $contact = $request->only(['name', 'sex', 'email', 'tel', 'address', 'contact__type', 'contact-content']);
        return view('confirm', compact('contact'));
    }

    public function store(Request $request){
        $contact = $request->only(['name', 'sex', 'email', 'tel', 'address', 'contact__type', 'contact-content']);
        Contact::create($contact);

        return view('thanks');
    }
}
