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

    public function index()
    {
        $data['programs'] = Program::latest()->get();
        return view('admin.programs.index',$data);
        
    }

    public function edit($id)
    {
        $data['program'] = Program::findOrFail($id);
        return view('admin.programs.edit',$data);
    }

    public function update(Request $request, $id)
    {   
        $program = Program::findOrFail($id);

        $image  = $request->file('image');
        if($image){
                $imagepath = 'storage/program/'.$program->image;
                File::delete($imagepath);
                $filename       = time().$image->getClientOriginalName();
                $image->storeAs("public/program",$filename);
                $image     = $filename;
                $program->image = $image;
                $program->save();
        }

        $program->title             = $request->title;
        $program->about             = $request->about;
        $program->save();

        Session::flash('success_message','Updated successfully!');
        return redirect()->back();
    }
    
}
