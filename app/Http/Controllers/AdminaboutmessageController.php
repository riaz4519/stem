<?php

namespace App\Http\Controllers;

use App\Models\Aboutmessage;
use Illuminate\Http\Request;
use Session;

class AdminaboutmessageController extends Controller
{
    public function create()
    {
        return view('admin.about.message.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'             => 'required',
            'description'       => 'required',
            'link_title'       => 'required',
            'link'       => 'required',
        ]);

        $aboutmessage = new Aboutmessage();
        $aboutmessage->title = $request->title;
        $aboutmessage->description = $request->description;
        $aboutmessage->link_title = $request->link_title;
        $aboutmessage->link = $request->link;
        $aboutmessage->save();
        session::flash('success_message','About message created successfully!');
        return back();
    }

    public function index()
    {
        $data['aboutmessage'] = $aboutmessage = Aboutmessage::first();
        return view('admin.about.message.index',$data);
    }

    public function edit($id)
    {
        $data['aboutmessage']  = Aboutmessage::findOrFail($id);
        
        return view('admin.about.message.edit',$data);
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'title'             => 'required',
            'description'       => 'required',
            'link_title'       => 'required',
            'link'       => 'required',
        ]);

        $aboutmessage = Aboutmessage::findOrFail($id);
        $aboutmessage->title = $request->title;
        $aboutmessage->description = $request->description;
        $aboutmessage->link_title = $request->link_title;
        $aboutmessage->link = $request->link;
        $aboutmessage->save();

        Session::flash('success_message',"Updated successfully!");
        return redirect()->back();

    }
}
