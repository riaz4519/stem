<?php

namespace App\Http\Controllers;

use Session;
use File;
use App\Models\Ourpartner;
use Illuminate\Http\Request;

class OurpartnerController extends Controller
{
    public function index()
    {
        $data['partners'] = $partners = Ourpartner::latest()->get();
        return view('admin.ourpartner.index',$data);
    }

    public function create()
    {
        return view('admin.ourpartner.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required',
        ]);

        $image  = $request->file('image');

        if($image){

            $filename       = time().$image->getClientOriginalName();
            $image->storeAs("public/partners",$filename);
            $image     = $filename;
        }

        
        Ourpartner::create([
            'name' => $request->name,
            'image' => $image,
        ]);

        Session::flash('success_message','Created successfully!');
        return redirect()->back();
    }

    public function edit($id)
    {
        $data['partner'] = $partner = Ourpartner::findOrFail($id);
        return view('admin.ourpartner.edit',$data);
    }

    public function update(Request $request, $id)
    {   
        
        $partner = Ourpartner::findOrFail($id);

        $image  = $request->file('image');
        if($image){
                $imagepath = 'storage/partners/'.$partner->image;
                File::delete($imagepath);
                $filename       = time().$image->getClientOriginalName();
                $image->storeAs("public/partners",$filename);
                $image     = $filename;
        
                $partner->image      = $image;
                $partner->save();
        }

        if($request->name)
        {
            $partner->name      = $request->name;
            $partner->save();
        }
        
        return redirect()->back();
    }
}
