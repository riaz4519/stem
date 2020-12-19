<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ourstory;
use App\Models\Annualreport;
use App\Models\Peoplecategory;
use App\Models\Ourpeople;
use App\Models\Ourwork;

class AboutUsController extends Controller
{
    //

    public function our_work(){
        $data['ourworks'] = Ourwork::whereNotNull('image')->get();
        return view('about_us.our_work',$data);
    }

    public function our_story(){
        $data['ourstories'] = Ourstory::paginate(8);
        $data['ourworkswithoutimages'] = Ourwork::whereNull('image')->get();
        return view('about_us.our_story',$data);
    }

    public function our_people(){
        $data['categories'] = Peoplecategory::latest()->get();
        $data['ourpeoples'] = Ourpeople::latest()->get();
        return view('about_us.our_people',$data);
    }

    public function categorywise_people($categoryID)
    {
        $peoplecategory = Peoplecategory::where('id',$categoryID)->first();
        $data['categories'] = Peoplecategory::latest()->get();
        $data['ourpeoples'] = Ourpeople::where('peoplecategory_id',$peoplecategory->id)->get();

        return view('about_us.categorywise_ourpeople',$data);
    }

    public function annual_report(){
        $data['annualreports'] = Annualreport::latest()->get();
        return view('about_us.annual_report',$data);

    }
}
