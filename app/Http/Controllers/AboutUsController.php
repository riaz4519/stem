<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    //

    public function our_work(){

        return view('about_us.our_work');
    }

    public function our_story(){

        return view('about_us.our_story');
    }

    public function our_people(){

        return view('about_us.our_people');
    }
}
