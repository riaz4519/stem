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
}
