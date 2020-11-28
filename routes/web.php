<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\CompetitionController;
use App\Http\Controllers\ContactUsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|



*/

/*contact us*/
Route::get('contact-us',[ContactUsController::class,'contact'])->name('contact-us');
/*end of contact us*/

/*competition*/
Route::get('/competition/competition-1',[CompetitionController::class,'competition'])->name('competition.single');
/*end of competition*/

/*events*/
Route::get('/event/event-1',[EventsController::class,'event'])->name('event.single');
/*end of events*/

/*program section*/
Route::get('/programs/program-one',[ProgramController::class,'program'])->name('program.single');
/*end of program section*/

/*about us*/
Route::get('about-us/annual-report',[AboutUsController::class,'annual_report'])->name('about_us.annual_report');
Route::get('about-us/our-people',[AboutUsController::class,'our_people'])->name('about_us.our_people');
Route::get('about-us/our-story',[AboutUsController::class,'our_story'])->name('about_us.our_story');
Route::get('about-us/our-work',[AboutUsController::class,'our_work'])->name('about_us.our_work');
/*end of about us*/

Route::get('/', function () {
    return view('welcome');
});


