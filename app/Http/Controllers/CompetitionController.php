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

        $check_event_or_comp = Program::where('id',$request->program_id)->first()->verify_event_competition;
        
        // 0 = event, 1 = competition, 2 = both
        if($check_event_or_comp == 1 || $check_event_or_comp == 2)
        {

            $image  = $request->file('image');

            if($image){

                $filename       = time().$image->getClientOriginalName();
                $image->storeAs("public/competition",$filename);
                $image     = $filename;
            }

        

            Competition::create([
                'about' => $request->about,
                'title' => $request->title,
                'image' => $image,
                'program_id' => $request->program_id
            ]);
    
            Session::flash('success_message','Created successfully!');
            return redirect()->back();

        }else{

            Session::flash('error_message','Sorry this program has no permission to create competition!');
            return redirect()->back();

        }

        
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
        $data['competition'] = Competition::where('id',$competition_id)->first();
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

    public function edit_competitionparticipant($competitionparticipant_id)
    {
        $data['competition_participant'] = Competitionparticipant::where('id',$competitionparticipant_id)->first();
        return view('admin.competition.edit.edit_competitionparticipant',$data);
    }

    
    public function update_competitionparticipant(Request $request, $competitionparticipant_id)
    {   
        $competitionparticipant = Competitionparticipant::findOrFail($competitionparticipant_id);

        $image  = $request->file('image');
        if($image){
                $imagepath = 'storage/competition/participants/'.$competitionparticipant->image;
                File::delete($imagepath);
                $filename       = time().$image->getClientOriginalName();
                $image->storeAs("public/competition/participants/",$filename);
                $image     = $filename;
                $competitionparticipant->image = $image;
                $competitionparticipant->save();
        }

        $competitionparticipant->name             = $request->name;
        $competitionparticipant->profession       = $request->profession;
        $competitionparticipant->save();

        Session::flash('success_message','Updated successfully!');
        return redirect()->back();
    }

    public function addobjective($id)
    {
        $data['competition_id'] = Competition::where('id',$id)->first()->id;
        $data['competition'] = Competition::where('id',$id)->first();
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

    public function edit_objective($objective_id)
    {
        $data['competition_objective'] = Competitionobjective::where('id',$objective_id)->first();
        return view('admin.competition.edit.edit_objective',$data);
    }

    public function update_competition_objective(Request $request, $objective_id)
    {   
        
        $objective = Competitionobjective::findOrFail($objective_id);
        $objective->description = $request->description;
        $objective->save();
        
        Session::flash('success_message','Updated successfully!');
        return redirect()->back();
    }

    public function add_competition_photos($competition_id)
    {
        $data['competition_id'] = Competition::where('id',$competition_id)->first()->id;
        $data['competition'] = Competition::where('id',$competition_id)->first();
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

    public function edit_competitionphoto($competitionphoto_id)
    {
        $data['competition_photo'] = Competitionphoto::where('id',$competitionphoto_id)->first();
        return view('admin.competition.edit.edit_competitionphoto',$data);
    }

    
    public function update_competitionphoto(Request $request, $competitionphoto_id)
    {
        
        $competitionphoto = Competitionphoto::findOrFail($competitionphoto_id);

        $image  = $request->file('image');
        if($image){
                $imagepath = 'storage/competition/photos/'.$competitionphoto->image;
                File::delete($imagepath);
                $filename       = time().$image->getClientOriginalName();
                $image->storeAs("public/competition/photos",$filename);
                $image     = $filename;
        
                $competitionphoto->image      = $image;
                $competitionphoto->save();
        }
        Session::flash('success_message','Updated successfully!');
        return redirect()->back();
    }

    public function addpoint($id)
    {
        $data['competition_id'] = Competition::where('id',$id)->first()->id;
        $data['competition'] = Competition::where('id',$id)->first();
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

    
    public function edit_keypoint($keypoint_id)
    {
        $data['competition_key_point'] = Competitionkeypoint::where('id',$keypoint_id)->first();
        return view('admin.competition.edit.edit_keypoint',$data);
    }

    public function update_competition_keypoint(Request $request, $keypoint_id)
    {   
        
        $competition_keypoint = Competitionkeypoint::findOrFail($keypoint_id);
        $competition_keypoint->points = $request->points;
        $competition_keypoint->save();
        
        Session::flash('success_message','Updated successfully!');
        return redirect()->back();
    }

    public function video($id)
    {
        $data['competition_id'] = Competition::where('id',$id)->first()->id;
        $data['competition'] = Competition::where('id',$id)->first();
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

    
    public function edit_competition_video($video_id)
    {
        $data['competition_video'] = Competitionvideo::where('id',$video_id)->first();
        return view('admin.competition.edit.edit_video',$data);
    }

    
    public function update_competition_video(Request $request, $video_id)
    {  

        $competition_video = Competitionvideo::findOrFail($video_id);
        $competition_video->video = $request->video;
        $competition_video->save();
        
        Session::flash('success_message','Updated successfully!');
        return redirect()->back();
    }

    public function create_competition_mentors($competition_id){
        $data['competition_id'] = Competition::where('id',$competition_id)->first()->id;
        $data['competition'] = Competition::where('id',$competition_id)->first();
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

    public function edit_competitionmentor($competitionmentor_id)
    {
        $data['competition_mentor'] = Competitionmentor::where('id',$competitionmentor_id)->first();
        return view('admin.competition.edit.edit_competitionmentor',$data);
    }

    
    public function update_competition_competitionmentor(Request $request, $competitionmentor_id)
    {   
        $competitionmentor = Competitionmentor::findOrFail($competitionmentor_id);

        $image  = $request->file('image');
        if($image){
                $imagepath = 'storage/competition/mentors/'.$competitionmentor->image;
                File::delete($imagepath);
                $filename       = time().$image->getClientOriginalName();
                $image->storeAs("public/competition/mentors/",$filename);
                $image     = $filename;
                $competitionmentor->image = $image;
                $competitionmentor->save();
        }

        $competitionmentor->name             = $request->name;
        $competitionmentor->profession       = $request->profession;
        $competitionmentor->save();

        Session::flash('success_message','Updated successfully!');
        return redirect()->back();
    }

    public function create_competition_winner($competition_id)
    {
        $data['competition_id'] = Competition::where('id',$competition_id)->first()->id;
        $data['competition'] = Competition::where('id',$competition_id)->first();
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

    public function edit_competitionwinner($competitionwinner_id)
    {
        $data['competition_winner'] = Competitionwinner::where('id',$competitionwinner_id)->first();
        return view('admin.competition.edit.edit_competitionwinner',$data);
    }

    
    public function update_competitionwinner(Request $request, $competitionwinner_id)
    {   
        $competitionwinner = Competitionwinner::findOrFail($competitionwinner_id);

        $image  = $request->file('image');
        if($image){
                $imagepath = 'storage/competition/winner/'.$competitionwinner->image;
                File::delete($imagepath);
                $filename       = time().$image->getClientOriginalName();
                $image->storeAs("public/competition/winner/",$filename);
                $image     = $filename;
                $competitionwinner->image = $image;
                $competitionwinner->save();
        }

        $competitionwinner->name             = $request->name;
        $competitionwinner->why       = $request->why;
        $competitionwinner->position       = $request->position;
        $competitionwinner->save();

        Session::flash('success_message','Updated successfully!');
        return redirect()->back();
    }

}
