<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use File;
use App\Models\Ourstory;

class OurstoryController extends Controller
{
     public function index()
    {
        $data['ourstories'] = $ourstories = Ourstory::latest()->get();
        return view('admin.ourstory.index',$data);
    }

    public function create()
    {
        return view('admin.ourstory.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'date' => 'required',
            'title' => 'required',
            'fromtime' => 'required',
            'totime' => 'required',
            'location' => 'required',
        ]);

        $image  = $request->file('image');

        if($image){

            $filename       = time().$image->getClientOriginalName();
            $image->storeAs("public/ourstory",$filename);
            $image     = $filename;
        }

        
        Ourstory::create([
            'date' => $request->date,
            'title' => $request->title,
            'fromtime' => $request->fromtime,
            'totime' => $request->totime,
            'location' => $request->location,
            'image' => $image,
        ]);

        Session::flash('success_message','Created successfully!');
        return redirect()->back();
    }

    public function edit($id)
    {
        $data['ourstory'] = $ourstory = Ourstory::findOrFail($id);
        return view('admin.ourstory.edit',$data);
    }

    public function update(Request $request, $id)
    {   
        
        
        $ourstory = Ourstory::findOrFail($id);

        $image  = $request->file('image');
        if($image){
                $imagepath = 'storage/ourstory/'.$ourstory->image;
                File::delete($imagepath);
                $filename       = time().$image->getClientOriginalName();
                $image->storeAs("public/ourstory",$filename);
                $image     = $filename;
                $ourstory->image = $image;
                $ourstory->save();
        
        }

        $ourstory->title      = $request->title;
        $ourstory->fromtime      = $request->fromtime;
        $ourstory->totime      = $request->totime;
        $ourstory->date      = $request->date;
        $ourstory->location      = $request->location;
        $ourstory->save();

        Session::flash('success_message','Updated successfully!');
        return redirect()->back();
    }
}
