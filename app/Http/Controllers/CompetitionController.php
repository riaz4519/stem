<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompetitionController extends Controller
{
    //
    public function competition(){

        return view('competitions.competition');
    }
}
