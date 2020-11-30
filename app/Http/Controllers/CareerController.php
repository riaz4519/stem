<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use File;
use App\Models\Career;

class CareerController extends Controller
{
    public function index()
    {
        $data['careermessages']  = Career::paginate(10);
        return view('admin.career.index',$data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'         => 'required',
            'email'   => 'required',
            'phone'   => 'required',
            'message'   => 'required',
        ]);

        Career::create([
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
        $data['careermessage'] = Career::findOrFail($id);
        return view('admin.career.show',$data);
    }
}
