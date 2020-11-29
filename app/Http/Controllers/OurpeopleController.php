<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use File;
use App\Models\Ourpeople;
use App\Models\Peoplecategory;

class OurpeopleController extends Controller
{
    public function index()
    {
        $data['ourpeoples'] = Ourpeople::latest()->get();
        return view('admin.ourpeople.index',$data);
    }

    public function create()
    {
        $data['peoplecategories'] = Peoplecategory::all();
        return view('admin.ourpeople.create',$data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'name' => 'required',
            'peoplecategory_id' => 'required',
        ]);

        $image  = $request->file('image');

        if($image){

            $filename       = time().$image->getClientOriginalName();
            $image->storeAs("public/ourpeople",$filename);
            $image     = $filename;
        }

        
        Ourpeople::create([
            'name' => $request->name,
            'image' => $image,
            'peoplecategory_id' => $request->peoplecategory_id
        ]);

        Session::flash('success_message','Created successfully!');
        return redirect()->back();
    }

    public function edit($id)
    {
        $data['ourpeople'] = $ourpeople = Ourpeople::findOrFail($id);
        $data['peoplecategories'] = Peoplecategory::all();
        return view('admin.ourpeople.edit',$data);
    }

    public function update(Request $request, $id)
    {   
        $ourpeople = Ourpeople::findOrFail($id);

        $image  = $request->file('image');
        if($image){
                $imagepath = 'storage/ourpeople/'.$ourpeople->image;
                File::delete($imagepath);
                $filename       = time().$image->getClientOriginalName();
                $image->storeAs("public/ourpeople",$filename);
                $image     = $filename;
                $ourpeople->image = $image;
                $ourpeople->save();
        }

        $ourpeople->name      = $request->name;
        $ourpeople->peoplecategory_id      = $request->peoplecategory_id;
        $ourpeople->save();

        Session::flash('success_message','Updated successfully!');
        return redirect()->back();
    }
}
