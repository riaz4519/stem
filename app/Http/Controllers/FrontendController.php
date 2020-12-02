<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Whatwedo;
use App\Models\Ourpartner;
use App\Models\Aboutmessage;
use App\Models\News;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function homepage()
    {
        $data['banners']                = $banners              = Banner::where(['activitystatus'=>1])->orderBy('id', 'DESC')->get();
        $data['aboutmessage']           = $aboutmessage         = Aboutmessage::first();
        $data['whatwedos']              = $whatwedos            = Whatwedo::latest()->get();
        $data['partners']               = Ourpartner::latest()->get();
        
        return view('welcome',$data);
    }

    public function news()
    {
        $data['allnews'] = News::latest()->get();
        return view('news.news',$data);
    }

    public function career()
    {
        return view('career.career_page');
    }
}
