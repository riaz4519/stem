<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\ProgramKeyPoint;
use App\Models\Programobjective;
use App\Models\Programcase;
use App\Models\Popularcourse;
use App\Models\Programvideo;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProgramController extends Controller
{
    //

    public function program($program_id){


         $data['program'] = Program::where('id',$program_id)->first();
         $data['program_key_points'] = ProgramKeyPoint::where('program_id',$program_id)->get();
         $data['programobjectives'] = Programobjective::where('program_id',$program_id)->get();
         $data['programcountlists'] = Programcase::where('program_id',$program_id)->get();
         $data['popularcourses'] = Popularcourse::where('program_id',$program_id)->get();
         $data['videos'] = Programvideo::where('program_id',$program_id)->get();
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

    public function addpoint($id)
    {
        $data['program_id'] = Program::where('id',$id)->first()->id;
        return view('admin.programs.addpoint',$data);
    }

    public function store_key_points(Request $request)
    {
        $request->validate([
            'program_id'         => 'required',
            'points'             => 'required',
        ]);

        foreach($request->points as $point)
        {
            $programkeypoint = new ProgramKeyPoint();
            $programkeypoint->program_id = $request->program_id;
            $programkeypoint->points = $point;
            $programkeypoint->save();
        }

        Session::flash('success_message','Created successfully!');
        return redirect()->back();
    }

    public function addobjective($id)
    {
        $data['program_id'] = Program::where('id',$id)->first()->id;
        return view('admin.programs.addobjective',$data);
    }

    public function store_program_objective(Request $request)
    {
        $request->validate([
            'program_id'         => 'required',
            'description'             => 'required',
        ]);

        $programkeypoint = new Programobjective();
        $programkeypoint->program_id = $request->program_id;
        $programkeypoint->description = $request->description;
        $programkeypoint->save();

        Session::flash('success_message','Created successfully!');
        return redirect()->back();
    }

    public function countlists($id)
    {
        $data['program_id'] = Program::where('id',$id)->first()->id;
        return view('admin.programs.countlists',$data);
    }

    public function store_program_countlist(Request $request)
    {
        $request->validate([
            'program_id'         => 'required',
        ]);

        $countlist = new Programcase();
        $countlist->program_id = $request->program_id;
        $countlist->no_of_participants = $request->no_of_participants;
        $countlist->no_of_applicants = $request->no_of_applicants;
        $countlist->no_of_mentors = $request->no_of_mentors;
        $countlist->no_of_casestudies = $request->no_of_casestudies;
        $countlist->save();

        Session::flash('success_message','Created successfully!');
        return redirect()->back();
    }

    public function popularcourse($id)
    {
        $data['program_id'] = Program::where('id',$id)->first()->id;
        return view('admin.programs.popularcourse',$data);
    }

    public function store_program_popularcourse(Request  $request){

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'program_id' => 'required',
        ]);

        $image  = $request->file('image');

        if($image){

            $filename       = time().$image->getClientOriginalName();
            $image->storeAs("public/program/popularcourse",$filename);
            $image     = $filename;
        }

        Popularcourse::create([
            'program_id' => $request->program_id,
            'image' => $image,
        ]);

        Session::flash('success_message','Created successfully!');
        return redirect()->back();
    }

    public function video($id)
    {
        $data['program_id'] = Program::where('id',$id)->first()->id;
        return view('admin.programs.video',$data);
    }

    public function store_program_video(Request  $request){

        $request->validate([
            'video' => 'required',
            'program_id' => 'required',
        ]);

        $video  = $request->file('video');

        if($video){

            $filename       = time().$video->getClientOriginalName();
            $video->storeAs("public/program/video",$filename);
            $video     = $filename;
        }

        Programvideo::create([
            'program_id' => $request->program_id,
            'video' => $video,
        ]);

        Session::flash('success_message','Created successfully!');
        return redirect()->back();
    }
}
