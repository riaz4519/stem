<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Program;
use App\Models\Competition;
use App\Models\Competitionparticipant;
use App\Models\Competitionobjective;
use App\Models\Competitionphoto;
use App\Models\Competitionkeypoint;
use App\Models\Competitionvideo;
use App\Models\Competitionmentor;
use App\Models\Competitionwinner;
use Illuminate\Http\Request;
use Session;
use File;

class CompetitionController extends Controller
{
    //
    public function competition($competition_id){
        $data['competition'] = Competition::where('id',$competition_id)->first();
        return view('competitions.competition',$data);
    }

    public function create_competition(){
        $data['programs'] = Program::latest()->get();
        return view('admin.competition.create_competition',$data);
    }
    
    public function store_competition(Request  $request){

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'about' => 'required',
            'title' => 'required',
            'program_id' => 'required'
        ]);

        $image  = $request->file('image');

        if($image){

            $filename       = time().$image->getClientOriginalName();
            $image->storeAs("public/competition",$filename);
            $image     = $filename;
        }

        if(Event::where('program_id',$request->program_id)->first())
        {
            Session::flash('success_message','Selected program already exists in Event!!!');
            return back();
        }

        Competition::create([
            'about' => $request->about,
            'title' => $request->title,
            'image' => $image,
            'program_id' => $request->program_id
        ]);

        Session::flash('success_message','Created successfully!');
        return redirect()->back();
    }

    public function index()
    {
        $data['competitions'] = Competition::latest()->get();
        return view('admin.competition.index',$data);
    }

    public function edit($id)
    {
        $data['competition'] = Competition::findOrFail($id);
        return view('admin.competition.edit',$data);
    }

    public function update(Request $request, $id)
    {   
        $competition = Competition::findOrFail($id);

        $image  = $request->file('image');
        if($image){
                $imagepath = 'storage/competition/'.$competition->image;
                File::delete($imagepath);
                $filename       = time().$image->getClientOriginalName();
                $image->storeAs("public/competition",$filename);
                $image     = $filename;
                $competition->image = $image;
                $competition->save();
        }

        $competition->title             = $request->title;
        $competition->about             = $request->about;
        $competition->save();

        Session::flash('success_message','Updated successfully!');
        return redirect()->back();
    }

    public function create_competition_participants($competition_id){
        $data['competition_id'] = Competition::where('id',$competition_id)->first()->id;
        return view('admin.competition.addparticipants',$data);
    }

    public function store_competition_participants(Request $request)
    {
        $request->validate([
            'competition_id' => 'required',
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'profession' => 'required',
        ]);

        $image  = $request->file('image');

        if($image){

            $filename       = time().$image->getClientOriginalName();
            $image->storeAs("public/competition/participants",$filename);
            $image     = $filename;
        }


        Competitionparticipant::create([
            'competition_id' => $request->competition_id,
            'name' => $request->name,
            'profession' => $request->profession,
            'image' => $image,
        ]);

        Session::flash('success_message','Created successfully!');
        return redirect()->back();
    }

    public function addobjective($id)
    {
        $data['competition_id'] = Competition::where('id',$id)->first()->id;
        return view('admin.competition.addobjective',$data);
    }

    public function store_competition_objective(Request $request)
    {
        $request->validate([
            'competition_id'   => 'required',
            'description'      => 'required',
        ]);

        $competitionobjective = new Competitionobjective();
        $competitionobjective->competition_id = $request->competition_id;
        $competitionobjective->description = $request->description;
        $competitionobjective->save();

        Session::flash('success_message','Created successfully!');
        return redirect()->back();
    }

    public function add_competition_photos($competition_id)
    {
        $data['competition_id'] = Competition::where('id',$competition_id)->first()->id;
        return view('admin.competition.addphotos',$data);
    }

    public function store_competition_photos(Request $request)
    {
        $request->validate([
            'competition_id' => 'required',
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $image  = $request->file('image');

        if($image){

            $filename       = time().$image->getClientOriginalName();
            $image->storeAs("public/competition/photos",$filename);
            $image     = $filename;
        }


        Competitionphoto::create([
            'competition_id' => $request->competition_id,
            'name' => $request->name,
            'image' => $image,
        ]);

        Session::flash('success_message','Created successfully!');
        return redirect()->back();
    }

    public function addpoint($id)
    {
        $data['competition_id'] = Competition::where('id',$id)->first()->id;
        return view('admin.competition.addpoint',$data);
    }

    public function store_key_points(Request $request)
    {
        $request->validate([
            'competition_id'         => 'required',
            'points'           => 'required',
        ]);

        foreach($request->points as $point)
        {
            $competitionkeypoint = new Competitionkeypoint();
            $competitionkeypoint->competition_id = $request->competition_id;
            $competitionkeypoint->points = $point;
            $competitionkeypoint->save();
        }

        Session::flash('success_message','Created successfully!');
        return redirect()->back();
    }

    public function video($id)
    {
        $data['competition_id'] = Competition::where('id',$id)->first()->id;
        return view('admin.competition.video',$data);
    }

    public function store_competition_video(Request $request){

        $request->validate([
            'video' => 'required',
            'competition_id' => 'required',
        ]);

        Competitionvideo::create([
            'competition_id' => $request->competition_id,
            'video' => $request->video,
        ]);

        Session::flash('success_message','Created successfully!');
        return redirect()->back();
    }

    public function create_competition_mentors($competition_id){
        $data['competition_id'] = Competition::where('id',$competition_id)->first()->id;
        return view('admin.competition.addmentors',$data);
    }

    public function store_competition_mentors(Request $request)
    {
        $request->validate([
            'competition_id' => 'required',
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $image  = $request->file('image');

        if($image){

            $filename       = time().$image->getClientOriginalName();
            $image->storeAs("public/competition/mentors",$filename);
            $image     = $filename;
        }


        Competitionmentor::create([
            'competition_id' => $request->competition_id,
            'name' => $request->name,
            'profession' => $request->profession,
            'image' => $image,
        ]);

        Session::flash('success_message','Created successfully!');
        return redirect()->back();
    }

    public function create_competition_winner($competition_id)
    {
        $data['competition_id'] = Competition::where('id',$competition_id)->first()->id;
        return view('admin.competition.addwinners',$data);
    }
    

    public function store_competition_winner(Request $request)
    {
        $request->validate([
            'competition_id'    => 'required',
            'name'              => 'required',
            'why'               => 'required',
            'position'          => 'required',
            'image'             => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $image  = $request->file('image');

        if($image){

            $filename       = time().$image->getClientOriginalName();
            $image->storeAs("public/competition/winner",$filename);
            $image     = $filename;
        }


        Competitionwinner::create([
            'competition_id' => $request->competition_id,
            'name' => $request->name,
            'image' => $image,
            'why' => $request->why,
            'position' => $request->position,
        ]);

        Session::flash('success_message','Created successfully!');
        return redirect()->back();
    }

}
