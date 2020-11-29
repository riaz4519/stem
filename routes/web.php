<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\WhatwedoController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\CompetitionController;
use App\Http\Controllers\AdminaboutmessageController;

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

Route::get('/',[App\Http\Controllers\FrontendController::class,'homepage']);



Auth::routes();



// ADMIN SIDE
Route::get('/admin_dashboard', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('dashboard');


// banner
Route::get('banner/create',[App\Http\Controllers\BannerController::class,'create'])->name('banner.create')->middleware('auth');
Route::post('banner',[App\Http\Controllers\BannerController::class,'store'])->name('banner.store')->middleware('auth');
Route::get('banner',[App\Http\Controllers\BannerController::class,'index'])->name('banner.index')->middleware('auth');
Route::post('/banner/changestatus/{id}',[App\Http\Controllers\BannerController::class,'changestatus'])->name('banner.changestatus')->middleware('auth');
Route::get('banner/{id}',[App\Http\Controllers\BannerController::class,'show'])->name('banner.show')->middleware('auth');
Route::get('banner/{id}/edit',[App\Http\Controllers\BannerController::class,'edit'])->name('banner.edit')->middleware('auth');
Route::patch('banner/{id}',[App\Http\Controllers\BannerController::class,'update'])->name('banner.update')->middleware('auth');
Route::DELETE('/deletebanner',[App\Http\Controllers\BannerController::class,'destroy'])->name('banner.destroy');

// About message
Route::get('about-message/create',[App\Http\Controllers\AdminaboutmessageController::class,'create'])->name('aboutmessage.create')->middleware('auth');
Route::post('about-message',[App\Http\Controllers\AdminaboutmessageController::class,'store'])->name('aboutmessage.store')->middleware('auth');
Route::get('about-message',[App\Http\Controllers\AdminaboutmessageController::class,'index'])->name('aboutmessage.index')->middleware('auth');
Route::get('about-message/{id}/edit',[App\Http\Controllers\AdminaboutmessageController::class,'edit'])->name('aboutmessage.edit')->middleware('auth');
Route::patch('about-message/{id}',[App\Http\Controllers\AdminaboutmessageController::class,'update'])->name('aboutmessage.update')->middleware('auth');

// Whatwedo
Route::get('what-we-do/create',[App\Http\Controllers\WhatwedoController::class,'create'])->name('whatwedo.create')->middleware('auth');
Route::post('what-we-do',[App\Http\Controllers\WhatwedoController::class,'store'])->name('whatwedo.store')->middleware('auth');
Route::get('what-we-do',[App\Http\Controllers\WhatwedoController::class,'index'])->name('whatwedo.index')->middleware('auth');
Route::get('what-we-do/{id}/edit',[App\Http\Controllers\WhatwedoController::class,'edit'])->name('whatwedo.edit')->middleware('auth');
Route::patch('what-we-do/{id}',[App\Http\Controllers\WhatwedoController::class,'update'])->name('whatwedo.update')->middleware('auth');