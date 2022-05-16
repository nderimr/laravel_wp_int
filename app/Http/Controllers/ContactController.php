<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::orderBy('created_at','DESC')->get();
         return view('contacts.index')->with('contacts',$contacts);
    }

    public function create(){
        return view('contacts.create');
    }

    public function store(Request $request)
    {
        $validator = $request->validate([
            'name'=> ['required','max:255'],
            'phone_number' => 'required',
            'email_address'=>'required|string|email',
            'desired_budget' =>'required|numeric',
            'message'=>['required','max:255']
            ]);
        if($validator){ 
            return "passed";   
            $contact = new Contact();
            $contact->name = $request->name;
            $contact->phone_number = $request->phone_number;
            $contact->email_address = $request->email_address;
            $contact->desired_budget = $request->desired_budget;
            $contact->message = $request->message;
            $contact->save(); 
            return redirect('contacts/index');
        }
        else 
        {
            return "Failled";
            return $validator->errors()->all();
        }

    }
}
