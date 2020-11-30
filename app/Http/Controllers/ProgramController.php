<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProgramController extends Controller
{
    //

    public function program($program_id){


         $data['program'] = Program::where('id',$program_id)->first();

        return view('programs.program')->with($data);
    }

    public function create_program(){

        return view('admin.programs.create_program');
    }
    public function store_program(Request  $request){

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'about' => 'required',
            'title' => 'required',

        ]);

        $image  = $request->file('image');

        if($image){

            $filename       = time().$image->getClientOriginalName();
            $image->storeAs("public/program",$filename);
            $image     = $filename;
        }


        Program::create([
            'about' => $request->about,
            'title' => $request->title,
            'image' => $image,
        ]);

        Session::flash('success_message','Created successfully!');
        return redirect()->back();
    }

    public function show_program(){

        return $data['programs'] = Program::all();
    }
}
