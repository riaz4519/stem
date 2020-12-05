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
use File;

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
        return view('admin.programs.create_program',$data);
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
        $data['program'] = $program = Program::where('id',$id)->first();

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

    public function edit_key_point($keypoint_id)
    {
        $data['program_key_point'] = ProgramKeyPoint::where('id',$keypoint_id)->first();
        return view('admin.programs.edit_keypoint',$data);
    }

    public function update_key_point(Request $request, $id)
    {   
        
        $program_key_point = ProgramKeyPoint::findOrFail($id);
        $program_key_point->points = $request->points;
        $program_key_point->save();
        
        Session::flash('success_message','Updated successfully!');
        return redirect()->back();
    }

    public function addobjective($id)
    {
        $data['program_id'] = Program::where('id',$id)->first()->id;
        $data['program'] = $program = Program::where('id',$id)->first();
        return view('admin.programs.addobjective',$data);
    }

    public function store_program_objective(Request $request)
    {
        $request->validate([
            'program_id'         => 'required',
            'description'             => 'required',
        ]);

        $programobjective = new Programobjective();
        $programobjective->program_id = $request->program_id;
        $programobjective->description = $request->description;
        $programobjective->save();

        Session::flash('success_message','Created successfully!');
        return redirect()->back();
    }

    public function edit_program_objective($objective_id)
    {
        $data['program_objective'] = Programobjective::where('id',$objective_id)->first();
        return view('admin.programs.edit_objective',$data);
    }
    
    public function update_program_objective(Request $request, $objective_id)
    {   
        
        $program_objective = Programobjective::findOrFail($objective_id);
        $program_objective->description = $request->description;
        $program_objective->save();
        
        Session::flash('success_message','Updated successfully!');
        return redirect()->back();
    }

    public function countlists($id)
    {
        $data['program_id'] = Program::where('id',$id)->first()->id;
        $data['program'] = $program = Program::where('id',$id)->first();
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

    public function edit_program_countlist($countlist_id)
    {
        $data['program_countlist'] = Programcase::where('id',$countlist_id)->first();
        return view('admin.programs.edit_countlist',$data);
    }
    
    public function update_program_countlist(Request $request, $countlist_id)
    {   

        $program_countlist = Programcase::findOrFail($countlist_id);
        $program_countlist->no_of_participants = $request->no_of_participants;
        $program_countlist->no_of_applicants = $request->no_of_applicants;
        $program_countlist->no_of_mentors = $request->no_of_mentors;
        $program_countlist->no_of_casestudies = $request->no_of_casestudies;
        $program_countlist->save();
        
        Session::flash('success_message','Updated successfully!');
        return redirect()->back();
    }

    public function popularcourse($id)
    {
        $data['program_id'] = Program::where('id',$id)->first()->id;
        $data['program'] = $program = Program::where('id',$id)->first();
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

    public function edit_program_popularcourse($popularcourse_id)
    {
        $data['program_popularcourse'] = Popularcourse::where('id',$popularcourse_id)->first();
        return view('admin.programs.edit_popularcourse',$data);
    }

    
    public function update_program_popularcourse(Request $request, $popularcourse_id)
    {   
        
        $popularcourse = Popularcourse::findOrFail($popularcourse_id);

        $image  = $request->file('image');
        if($image){
                $imagepath = 'storage/program/popularcourse/'.$popularcourse->image;
                File::delete($imagepath);
                $filename       = time().$image->getClientOriginalName();
                $image->storeAs("public/program/popularcourse",$filename);
                $image     = $filename;
        
                $popularcourse->image      = $image;
                $popularcourse->save();
        }
        Session::flash('success_message','Updated successfully!');
        return redirect()->back();
    }

    public function video($id)
    {
        $data['program_id'] = Program::where('id',$id)->first()->id;
        $data['program'] = $program = Program::where('id',$id)->first();
        return view('admin.programs.video',$data);
    }

    public function store_program_video(Request  $request){

        $request->validate([
            'video' => 'required',
            'program_id' => 'required',
        ]);

        Programvideo::create([
            'program_id' => $request->program_id,
            'video' => $request->video,
        ]);

        Session::flash('success_message','Created successfully!');
        return redirect()->back();
    }

    public function edit_program_video($video_id)
    {
        $data['program_video'] = Programvideo::where('id',$video_id)->first();
        return view('admin.programs.edit_video',$data);
    }

    public function update_program_video(Request $request, $video_id)
    {   

        $program_video = Programvideo::findOrFail($video_id);
        $program_video->video = $request->video;
        $program_video->save();
        
        Session::flash('success_message','Updated successfully!');
        return redirect()->back();
    }

}
