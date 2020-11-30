<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use File;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $data['contacts']  = Contact::paginate(10);
        return view('admin.contact.index',$data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'         => 'required',
            'email'   => 'required',
            'phone'   => 'required',
            'message'   => 'required',
        ]);

        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);

        Session::flash('success_message','Your message has been recorded. We will get back to you soon...');
        return redirect()->back();
    }

    public function show($id)
    {
        $data['contact'] = Contact::findOrFail($id);
        return view('admin.contact.show',$data);
    }
}
