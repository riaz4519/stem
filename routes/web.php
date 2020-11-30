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
use App\Http\Controllers\OurpartnerController;
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
Route::get('/programs/{program_id}',[ProgramController::class,'program'])->name('program.single');
/*end of program section*/

/*about us*/
Route::get('about-us/annual-report',[AboutUsController::class,'annual_report'])->name('about_us.annual_report');
Route::get('about-us/our-people',[AboutUsController::class,'our_people'])->name('about_us.our_people');
Route::get('about-us/our-story',[AboutUsController::class,'our_story'])->name('about_us.our_story');
Route::get('about-us/our-work',[AboutUsController::class,'our_work'])->name('about_us.our_work');
Route::get('about-us/our-people/{categoryID}',[App\Http\Controllers\AboutUsController::class,'categorywise_people'])->name('category.people');

/*end of about us*/

Route::get('/',[App\Http\Controllers\FrontendController::class,'homepage']);
Route::get('/all-news',[App\Http\Controllers\FrontendController::class,'news'])->name('all.news');

// career page
Route::get('/career',[App\Http\Controllers\FrontendController::class,'career'])->name('career.show_career_page');


Auth::routes();
Route::middleware('auth')->group(function (){

//program

    //create program
    Route::get('program/show',[ProgramController::class,'show_program'])->name('program.show');
    Route::post('/program/create-program',[ProgramController::class,'store_program'])->name('program.new.store');
    Route::get('/program/create-program',[ProgramController::class,'create_program'])->name('program.new');


// ADMIN SIDE
    Route::get('/admin_dashboard', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/admin_logout','AdminController@logout');

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

// Our Partners
    Route::get('partner/create',[App\Http\Controllers\OurpartnerController::class,'create'])->name('ourpartner.create')->middleware('auth');
    Route::post('partner',[App\Http\Controllers\OurpartnerController::class,'store'])->name('ourpartner.store')->middleware('auth');
    Route::get('partner',[App\Http\Controllers\OurpartnerController::class,'index'])->name('ourpartner.index')->middleware('auth');
    Route::get('partner/{id}/edit',[App\Http\Controllers\OurpartnerController::class,'edit'])->name('ourpartner.edit')->middleware('auth');
    Route::patch('partner/{id}',[App\Http\Controllers\OurpartnerController::class,'update'])->name('ourpartner.update')->middleware('auth');

// our story
    Route::get('ourstory/create',[App\Http\Controllers\OurstoryController::class,'create'])->name('ourstory.create')->middleware('auth');
    Route::post('ourstory',[App\Http\Controllers\OurstoryController::class,'store'])->name('ourstory.store')->middleware('auth');
    Route::get('ourstory',[App\Http\Controllers\OurstoryController::class,'index'])->name('ourstory.index')->middleware('auth');
    Route::get('ourstory/{id}/edit',[App\Http\Controllers\OurstoryController::class,'edit'])->name('ourstory.edit')->middleware('auth');
    Route::patch('ourstory/{id}',[App\Http\Controllers\OurstoryController::class,'update'])->name('ourstory.update')->middleware('auth');

// Annual Report
    Route::get('annualreport/create',[App\Http\Controllers\AnnualreportController::class,'create'])->name('annualreport.create')->middleware('auth');
    Route::post('annualreport',[App\Http\Controllers\AnnualreportController::class,'store'])->name('annualreport.store')->middleware('auth');
    Route::get('annualreport',[App\Http\Controllers\AnnualreportController::class,'index'])->name('annualreport.index')->middleware('auth');
    Route::get('annualreport/{id}/edit',[App\Http\Controllers\AnnualreportController::class,'edit'])->name('annualreport.edit')->middleware('auth');
    Route::patch('annualreport/{id}',[App\Http\Controllers\AnnualreportController::class,'update'])->name('annualreport.update')->middleware('auth');

// People Category
    Route::get('peoplecategory/create',[App\Http\Controllers\PeoplecategoryController::class,'create'])->name('peoplecategory.create')->middleware('auth');
    Route::post('peoplecategory',[App\Http\Controllers\PeoplecategoryController::class,'store'])->name('peoplecategory.store')->middleware('auth');
    Route::get('peoplecategory',[App\Http\Controllers\PeoplecategoryController::class,'index'])->name('peoplecategory.index')->middleware('auth');
    Route::get('peoplecategory/{id}/edit',[App\Http\Controllers\PeoplecategoryController::class,'edit'])->name('peoplecategory.edit')->middleware('auth');
    Route::patch('peoplecategory/{id}',[App\Http\Controllers\PeoplecategoryController::class,'update'])->name('peoplecategory.update')->middleware('auth');

// Our people
    Route::get('ourpeople/create',[App\Http\Controllers\OurpeopleController::class,'create'])->name('ourpeople.create')->middleware('auth');
    Route::post('ourpeople',[App\Http\Controllers\OurpeopleController::class,'store'])->name('ourpeople.store')->middleware('auth');
    Route::get('ourpeople',[App\Http\Controllers\OurpeopleController::class,'index'])->name('ourpeople.index')->middleware('auth');
    Route::get('ourpeople/{id}/edit',[App\Http\Controllers\OurpeopleController::class,'edit'])->name('ourpeople.edit')->middleware('auth');
    Route::patch('ourpeople/{id}',[App\Http\Controllers\OurpeopleController::class,'update'])->name('ourpeople.update')->middleware('auth');

// News
    Route::get('news/create',[App\Http\Controllers\NewsController::class,'create'])->name('news.create')->middleware('auth');
    Route::post('news',[App\Http\Controllers\NewsController::class,'store'])->name('news.store')->middleware('auth');
    Route::get('news',[App\Http\Controllers\NewsController::class,'index'])->name('news.index')->middleware('auth');
    Route::get('news/{id}/edit',[App\Http\Controllers\NewsController::class,'edit'])->name('news.edit')->middleware('auth');
    Route::patch('news/{id}',[App\Http\Controllers\NewsController::class,'update'])->name('news.update')->middleware('auth');

// Our work
    Route::get('ourwork/create',[App\Http\Controllers\OurworkController::class,'create'])->name('ourwork.create')->middleware('auth');
    Route::post('ourwork',[App\Http\Controllers\OurworkController::class,'store'])->name('ourwork.store')->middleware('auth');
    Route::get('ourwork',[App\Http\Controllers\OurworkController::class,'index'])->name('ourwork.index')->middleware('auth');
    Route::get('ourwork/{id}/edit',[App\Http\Controllers\OurworkController::class,'edit'])->name('ourwork.edit')->middleware('auth');
    Route::patch('ourwork/{id}',[App\Http\Controllers\OurworkController::class,'update'])->name('ourwork.update')->middleware('auth');
// Contact
    Route::post('contact',[App\Http\Controllers\ContactController::class,'store'])->name('contact.store');
    Route::get('contact',[App\Http\Controllers\ContactController::class,'index'])->name('contact.index')->middleware('auth');
    Route::get('contact/{id}',[App\Http\Controllers\ContactController::class,'show'])->name('contact.show')->middleware('auth');

// Career
    Route::post('career',[App\Http\Controllers\CareerController::class,'store'])->name('career.store');
    Route::get('admin/career/messages',[App\Http\Controllers\CareerController::class,'index'])->name('career.index')->middleware('auth');
    Route::get('career/{id}',[App\Http\Controllers\CareerController::class,'show'])->name('career.show')->middleware('auth');
});
