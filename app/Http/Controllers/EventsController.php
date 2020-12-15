<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Program;
use App\Models\Eventparticipant;
use App\Models\Eventobjective;
use App\Models\Eventphoto;
use App\Models\Eventkeypoint;
use App\Models\Eventvideo;
use App\Models\Eventmentor;
use Session;
use File;

class EventsController extends Controller
{
    //
    public function event($event_id){
        $data['event'] = Event::where('id',$event_id)->first();
        return view('events.event',$data);
    }

    public function create_event(){
        $data['programs'] = Program::latest()->get();
        return view('admin.event.create_event',$data);
    }

    public function store_event(Request  $request){

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'about' => 'required',
            'title' => 'required',
            'program_id' => 'required'
        ]);

        $check_event_or_comp = Program::where('id',$request->program_id)->first()->verify_event_competition;
        
        // 0 = event, 1 = competition, 2 = both
        if($check_event_or_comp == 0 || $check_event_or_comp == 2)
        {
        
            $image  = $request->file('image');

            if($image){

                $filename       = time().$image->getClientOriginalName();
                $image->storeAs("public/event",$filename);
                $image     = $filename;
            }


            Event::create([
                'about' => $request->about,
                'title' => $request->title,
                'image' => $image,
                'program_id' => $request->program_id
            ]);

            Session::flash('success_message','Created successfully!');
            return redirect()->back();

        }else{
            Session::flash('error_message','Sorry this program has no permission to create event!');
            return redirect()->back();
        }
    }

    public function index()
    {
        $data['events'] = Event::latest()->get();
        return view('admin.event.index',$data);
        
    }

    public function edit($id)
    {
        $data['event'] = Event::findOrFail($id);
        return view('admin.event.edit',$data);
    }

    public function update(Request $request, $id)
    {   
        $event = Event::findOrFail($id);

        $image  = $request->file('image');
        if($image){
                $imagepath = 'storage/event/'.$event->image;
                File::delete($imagepath);
                $filename       = time().$image->getClientOriginalName();
                $image->storeAs("public/event",$filename);
                $image     = $filename;
                $event->image = $image;
                $event->save();
        }

        $event->title             = $request->title;
        $event->about             = $request->about;
        $event->save();

        Session::flash('success_message','Updated successfully!');
        return redirect()->back();
    }

    public function create_event_participants($event_id){
        $data['event_id'] = Event::where('id',$event_id)->first()->id;
        $data['event'] = Event::where('id',$event_id)->first();
        return view('admin.event.addparticipants',$data);
    }

    public function store_event_participants(Request $request)
    {
        $request->validate([
            'event_id' => 'required',
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'profession' => 'required',
        ]);

        $image  = $request->file('image');

        if($image){

            $filename       = time().$image->getClientOriginalName();
            $image->storeAs("public/event/participants",$filename);
            $image     = $filename;
        }


        Eventparticipant::create([
            'event_id' => $request->event_id,
            'name' => $request->name,
            'profession' => $request->profession,
            'image' => $image,
        ]);

        Session::flash('success_message','Created successfully!');
        return redirect()->back();
    }

    public function edit_eventparticipant($eventparticipant_id)
    {
        $data['event_eventparticipant'] = Eventparticipant::where('id',$eventparticipant_id)->first();
        return view('admin.event.edit.edit_eventparticipant',$data);
    }
    
    public function update_event_eventparticipant(Request $request, $eventparticipant_id)
    {   
        $eventparticipant = Eventparticipant::findOrFail($eventparticipant_id);

        $image  = $request->file('image');
        if($image){
                $imagepath = 'storage/event/participants/'.$eventparticipant->image;
                File::delete($imagepath);
                $filename       = time().$image->getClientOriginalName();
                $image->storeAs("public/event/participants/",$filename);
                $image     = $filename;
                $eventparticipant->image = $image;
                $eventparticipant->save();
        }

        $eventparticipant->name             = $request->name;
        $eventparticipant->profession       = $request->profession;
        $eventparticipant->save();

        Session::flash('success_message','Updated successfully!');
        return redirect()->back();
    }

    public function addobjective($id)
    {
        $data['event_id'] = Event::where('id',$id)->first()->id;
        $data['event'] = Event::where('id',$id)->first();
        return view('admin.event.addobjective',$data);
    }

    public function store_event_objective(Request $request)
    {
        $request->validate([
            'event_id'         => 'required',
            'description'      => 'required',
        ]);

        $eventobjective = new Eventobjective();
        $eventobjective->event_id = $request->event_id;
        $eventobjective->description = $request->description;
        $eventobjective->save();

        Session::flash('success_message','Created successfully!');
        return redirect()->back();
    }

    public function edit_eventobjective($eventobjective_id)
    {
        $data['event_eventobjective'] = Eventobjective::where('id',$eventobjective_id)->first();
        return view('admin.event.edit.edit_eventobjective',$data);
    }
    
    public function update_event_eventobjective(Request $request, $eventobjective_id)
    {   
        
        $eventobjective = Eventobjective::findOrFail($eventobjective_id);
        $eventobjective->description = $request->description;
        $eventobjective->save();
        
        Session::flash('success_message','Updated successfully!');
        return redirect()->back();
    }

    public function add_event_photos($event_id)
    {
        $data['event_id'] = Event::where('id',$event_id)->first()->id;
        $data['event'] = Event::where('id',$event_id)->first();
        return view('admin.event.addphotos',$data);
    }
    
    public function store_event_photos(Request $request)
    {
        $request->validate([
            'event_id' => 'required',
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $image  = $request->file('image');

        if($image){

            $filename       = time().$image->getClientOriginalName();
            $image->storeAs("public/event/photos",$filename);
            $image     = $filename;
        }


        Eventphoto::create([
            'event_id' => $request->event_id,
            'name' => $request->name,
            'image' => $image,
        ]);

        Session::flash('success_message','Created successfully!');
        return redirect()->back();
    }

    
    public function edit_eventphoto($eventphoto_id)
    {
        $data['event_eventphoto'] = Eventphoto::where('id',$eventphoto_id)->first();
        return view('admin.event.edit.edit_eventphoto',$data);
    }

    public function update_event_eventphoto(Request $request, $eventphoto_id)
    {   
        
        $eventphoto = Eventphoto::findOrFail($eventphoto_id);

        $image  = $request->file('image');
        if($image){
                $imagepath = 'storage/event/photos/'.$eventphoto->image;
                File::delete($imagepath);
                $filename       = time().$image->getClientOriginalName();
                $image->storeAs("public/event/photos",$filename);
                $image     = $filename;
        
                $eventphoto->image      = $image;
                $eventphoto->save();
        }
        Session::flash('success_message','Updated successfully!');
        return redirect()->back();
    }


    public function addpoint($id)
    {
        $data['event_id'] = Event::where('id',$id)->first()->id;
        $data['event'] = Event::where('id',$id)->first();

        return view('admin.event.addpoint',$data);
    }

    public function store_key_points(Request $request)
    {
        $request->validate([
            'event_id'         => 'required',
            'points'           => 'required',
        ]);

        foreach($request->points as $point)
        {
            $eventkeypoint = new Eventkeypoint();
            $eventkeypoint->event_id = $request->event_id;
            $eventkeypoint->points = $point;
            $eventkeypoint->save();
        }

        Session::flash('success_message','Created successfully!');
        return redirect()->back();
    }

    public function edit_keypoint($keypoint_id)
    {
        $data['event_key_point'] = Eventkeypoint::where('id',$keypoint_id)->first();
        return view('admin.event.edit.edit_keypoint',$data);
    }
    
    public function update_event_keypoint(Request $request, $keypoint_id)
    {   
        
        $event_key_point = Eventkeypoint::findOrFail($keypoint_id);
        $event_key_point->points = $request->points;
        $event_key_point->save();
        
        Session::flash('success_message','Updated successfully!');
        return redirect()->back();
    }

    public function video($id)
    {
        $data['event_id'] = Event::where('id',$id)->first()->id;
        $data['event'] = Event::where('id',$id)->first();
        return view('admin.event.video',$data);
    }

    public function store_event_video(Request  $request){

        $request->validate([
            'video' => 'required',
            'event_id' => 'required',
        ]);

        Eventvideo::create([
            'event_id' => $request->event_id,
            'video' => $request->video,
        ]);

        Session::flash('success_message','Created successfully!');
        return redirect()->back();
    }

    public function edit_event_video($video_id)
    {
        $data['event_video'] = Eventvideo::where('id',$video_id)->first();
        return view('admin.event.edit.edit_video',$data);
    }
    
    public function update_event_video(Request $request, $video_id)
    {  

        $event_video = Eventvideo::findOrFail($video_id);
        $event_video->video = $request->video;
        $event_video->save();
        
        Session::flash('success_message','Updated successfully!');
        return redirect()->back();
    }

    public function create_event_mentors($event_id){
        $data['event_id'] = Event::where('id',$event_id)->first()->id;
        $data['event'] = Event::where('id',$event_id)->first();
        return view('admin.event.addmentors',$data);
    }

    public function store_event_mentors(Request $request)
    {
        $request->validate([
            'event_id' => 'required',
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $image  = $request->file('image');

        if($image){

            $filename       = time().$image->getClientOriginalName();
            $image->storeAs("public/event/mentors",$filename);
            $image     = $filename;
        }


        Eventmentor::create([
            'event_id' => $request->event_id,
            'name' => $request->name,
            'profession' => $request->profession,
            'image' => $image,
        ]);

        Session::flash('success_message','Created successfully!');
        return redirect()->back();
    }

    public function edit_eventmentor($eventmentor_id)
    {
        $data['event_eventmentor'] = Eventmentor::where('id',$eventmentor_id)->first();
        return view('admin.event.edit.edit_eventmentor',$data);
    }

    
    public function update_event_eventmentor(Request $request, $eventmentor_id)
    {   
        $eventmentor = Eventmentor::findOrFail($eventmentor_id);

        $image  = $request->file('image');
        if($image){
                $imagepath = 'storage/event/mentors/'.$eventmentor->image;
                File::delete($imagepath);
                $filename       = time().$image->getClientOriginalName();
                $image->storeAs("public/event/mentors/",$filename);
                $image     = $filename;
                $eventmentor->image = $image;
                $eventmentor->save();
        }

        $eventmentor->name             = $request->name;
        $eventmentor->profession       = $request->profession;
        $eventmentor->save();

        Session::flash('success_message','Updated successfully!');
        return redirect()->back();
    }
}
