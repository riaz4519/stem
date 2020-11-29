<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ourstory;
use App\Models\Annualreport;

class AboutUsController extends Controller
{
    //

    public function our_work(){

        return view('about_us.our_work');
    }

    public function our_story(){
        $data['ourstories'] = Ourstory::paginate(8);
        return view('about_us.our_story',$data);
    }

    public function our_people(){

        return view('about_us.our_people');
    }

    public function annual_report(){
        $data['annualreports'] = Annualreport::latest()->get();
        return view('about_us.annual_report',$data);

    }
}
