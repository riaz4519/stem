<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peoplecategory;
use Session;
class PeoplecategoryController extends Controller
{
    public function index()
    {
        $data['peoplecategories'] = $peoplecategories = Peoplecategory::latest()->get();
        return view('admin.peoplecategory.index',$data);
    }

    public function create()
    {
        return view('admin.peoplecategory.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        
        Peoplecategory::create([
            'name' => $request->name,
        ]);

        Session::flash('success_message','Created successfully!');
        return redirect()->back();
    }

    public function edit($id)
    {
        $data['peoplecategory'] = Peoplecategory::findOrFail($id);
        return view('admin.peoplecategory.edit',$data);
    }

    public function update(Request $request, $id)
    {   
        
        $peoplecategory = Peoplecategory::findOrFail($id);

        $peoplecategory->name      = $request->name;
        $peoplecategory->save();

        Session::flash('success_message','Updated successfully!');
        return redirect()->back();
    }
}
