<?php

namespace App\Http\Controllers;

use Session;
use App\Models\Whatwedo;
use Illuminate\Http\Request;

class WhatwedoController extends Controller
{
    public function create()
    {
        return view('admin.whatwedo.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'             => 'required',
            'description'       => 'required',
            'icon'       => 'required',
        ]);

        $whatwedo = new Whatwedo();
        $whatwedo->title = $request->title;
        $whatwedo->description = $request->description;
        $whatwedo->icon = $request->icon;
        $whatwedo->save();
        session::flash('success_message','Content saved successfully!');
        return back();
    }

    public function index()
    {
        $data['whatwedos'] = $whatwedos = Whatwedo::latest()->get();
        return view('admin.whatwedo.index',$data);
    }

    public function edit($id)
    {
        $data['whatwedo']  = Whatwedo::findOrFail($id);
        
        return view('admin.whatwedo.edit',$data);
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'title'             => 'required',
            'description'       => 'required',
            'icon'       => 'required',
        ]);

        $whatwedo = Whatwedo::findOrFail($id);
        $whatwedo->title = $request->title;
        $whatwedo->description = $request->description;
        $whatwedo->icon = $request->icon;
        $whatwedo->save();

        Session::flash('success_message',"Updated successfully!");
        return redirect()->back();

    }
}
