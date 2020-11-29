<?php

namespace App\Http\Controllers;

use File;
use Session;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data['banners'] = $banners = Banner::orderBy('created_at','desc')->paginate(6);
        return view('admin.banner.index',$data);
    }

    public function create()
    {
        return view('admin.banner.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image  = $request->file('image');

        if($image){

            $filename       = time().$image->getClientOriginalName();
            $image->storeAs("public/banner",$filename);
            $image     = $filename;
        }

        if(!empty($request->input('activitystatus'))){

            $activitystatus = 1;

        }else{

            $activitystatus = 0;
            
        }
        // BANNER
        $bannerDetails = Banner::create([
            'image' => $image ,
            'activitystatus' => $activitystatus,
        ]);

        session::flash('success_message','Banner created successfully!');
        return redirect()->back();
    }

    public function changestatus($id)
    {

        $banner = Banner::findOrFail($id);
        if($banner->activitystatus == 1)
        {
            $banner
            ->update(['activitystatus'=>0]);
            session::flash('success_message','Slider InActivated Successfully!');
        }
       else
        {
            $banner
            ->update(['activitystatus'=>1]);
            session::flash('success_message','Slider Activated Successfully!');
        }
        return ["status"=>1];
    }

    public function show($id)
    {
        $data['banner']             = $banner = Banner::findOrFail($id);
        return view('admin.banner.show',$data);
    }

    public function edit($id)
    {
        $data['banner'] = $banner = Banner::findOrFail($id);
        return view('admin.banner.edit',$data);
    }

    public function update(Request $request, $id)
    {   
        
        $banner = Banner::findOrFail($id);

        $image  = $request->file('image');
        if($image){
                $imagepath = 'storage/banner/'.$banner->image;
                File::delete($imagepath);
                $filename       = time().$image->getClientOriginalName();
                $image->storeAs("public/banner",$filename);
                $image     = $filename;
        
                $banner->image      = $image;
                $banner->save();
        }
        
        return redirect()->back();
    }

    public function destroy(Request $request)
    {
        $id = $request->banner_id;
        $banner = Banner::findOrFail($id);
        $imagepath = 'storage/banner/'.$banner->image;
        File::delete($imagepath);
        $banner->delete();
        return redirect()->route('banner.index');
    }

}
