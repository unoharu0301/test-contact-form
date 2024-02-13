<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactFormRequest;

class ContactFormController extends Controller
{
    public function index(){
        return view('index');
    }

    public function confirm(ContactFormRequest $request){
        $contact = $request->only(['name', 'name', 'sex', 'email', 'tel', 'address', 'contact__type', 'contact-content']);
        return view('confirm', compact('contact'));
    }
    
    public function store(ContactFormRequest $request){
        $contact = $request->only(['name', 'sex', 'email', 'tel', 'address', 'contact__type', 'contact-content']);
        Contact::create($contact);
        return view('thanks');
    }

    public function back(Request $request){
        return view('index');
    }
    
    public function login(Request $request){
        return view('login');
    }

    public function register(Request $request){
        return view('register');
    }
}
