<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ourwork;
use Session;
use File;

class OurworkController extends Controller
{
    public function index()
    {
        $data['ourworks'] = Ourwork::latest()->get();
        
        return view('admin.ourwork.index',$data);
    }

    public function create()
    {
        return view('admin.ourwork.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'         => 'required',
            'description'   => 'required',
        ]);

        $image  = $request->file('image');

        if($image){

            $filename       = time().$image->getClientOriginalName();
            $image->storeAs("public/ourwork",$filename);
            $image     = $filename;
        }

        Ourwork::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $image,
        ]);

        Session::flash('success_message','Created successfully!');
        return redirect()->back();
    }

    public function edit($id)
    {
        $data['ourwork'] = Ourwork::findOrFail($id);
        return view('admin.ourwork.edit',$data);
    }

    public function update(Request $request, $id)
    {   
        $ourwork = Ourwork::findOrFail($id);

        $image  = $request->file('image');
        if($image){
                $imagepath = 'storage/ourwork/'.$ourwork->image;
                File::delete($imagepath);
                $filename       = time().$image->getClientOriginalName();
                $image->storeAs("public/ourwork",$filename);
                $image     = $filename;
                $ourwork->image = $image;
                $ourwork->save();
        }

        $ourwork->title             = $request->title;
        $ourwork->description       = $request->description;
        $ourwork->image             = $image;
        $ourwork->save();

        Session::flash('success_message','Updated successfully!');
        return redirect()->back();
    }
}
