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
Route::get('/competition/{competition_id}',[CompetitionController::class,'competition'])->name('competition.single');
/*end of competition*/

/*events*/
Route::get('/event/{event_id}',[EventsController::class,'event'])->name('event.single');
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

//program

    Route::post('/program/create-program',[ProgramController::class,'store_program'])->name('program.new.store')->middleware('auth');
    Route::get('/program/create-program',[ProgramController::class,'create_program'])->name('program.new')->middleware('auth');
    Route::get('view-all-programs',[App\Http\Controllers\ProgramController::class,'index'])->name('program.index')->middleware('auth');
    Route::get('program/{id}/edit',[App\Http\Controllers\ProgramController::class,'edit'])->name('program.edit')->middleware('auth');
    Route::patch('program/{id}',[App\Http\Controllers\ProgramController::class,'update'])->name('program.update')->middleware('auth');
    Route::get('program/add-points/{id}',[App\Http\Controllers\ProgramController::class,'addpoint'])->name('program.addpoints')->middleware('auth');
    Route::post('/program/store/keypoints',[ProgramController::class,'store_key_points'])->name('program.addpoint.store')->middleware('auth');
    Route::get('program/keypoint/{keypoint_id}/edit',[App\Http\Controllers\ProgramController::class,'edit_key_point'])->name('program.keypoint.edit')->middleware('auth');
    Route::patch('program/keypoint/{keypoint_id}',[App\Http\Controllers\ProgramController::class,'update_key_point'])->name('program.keypoint.update')->middleware('auth');
    Route::get('program/add-objectives/{id}',[App\Http\Controllers\ProgramController::class,'addobjective'])->name('program.addobjective')->middleware('auth');
    Route::post('/program/store/objective',[ProgramController::class,'store_program_objective'])->name('program.addobjective.store')->middleware('auth');
    
    Route::get('program/objective/{objective_id}/edit',[App\Http\Controllers\ProgramController::class,'edit_program_objective'])->name('program.objective.edit')->middleware('auth');
    Route::patch('program/objective/{objective_id}',[App\Http\Controllers\ProgramController::class,'update_program_objective'])->name('program.objective.update')->middleware('auth');

    Route::get('program/countlist/{countlist_id}/edit',[App\Http\Controllers\ProgramController::class,'edit_program_countlist'])->name('program.countlist.edit')->middleware('auth');
    Route::patch('program/countlist/{countlist_id}',[App\Http\Controllers\ProgramController::class,'update_program_countlist'])->name('program.countlist.update')->middleware('auth');

    Route::get('program/add-program-count-list/{id}',[App\Http\Controllers\ProgramController::class,'countlists'])->name('program.countlists')->middleware('auth');
    Route::post('/program/store/countlist',[ProgramController::class,'store_program_countlist'])->name('program.countlist.store')->middleware('auth');
    Route::get('program/add-popularcourse/{id}',[App\Http\Controllers\ProgramController::class,'popularcourse'])->name('program.popularcourse')->middleware('auth');
    Route::post('/program/store/popularcourse',[ProgramController::class,'store_program_popularcourse'])->name('program.popularcourse.store')->middleware('auth');
    
    Route::get('program/popularcourse/{popularcourse_id}/edit',[App\Http\Controllers\ProgramController::class,'edit_program_popularcourse'])->name('program.popularcourse.edit')->middleware('auth');
    Route::patch('program/popularcourse/{popularcourse_id}',[App\Http\Controllers\ProgramController::class,'update_program_popularcourse'])->name('program.popularcourse.update')->middleware('auth');
    
    Route::get('program/add-video/{id}',[App\Http\Controllers\ProgramController::class,'video'])->name('program.video')->middleware('auth');
    Route::post('/program/store/video',[ProgramController::class,'store_program_video'])->name('program.video.store')->middleware('auth');

    Route::get('program/video/{video_id}/edit',[App\Http\Controllers\ProgramController::class,'edit_program_video'])->name('program.video.edit')->middleware('auth');
    Route::patch('program/video/{video_id}',[App\Http\Controllers\ProgramController::class,'update_program_video'])->name('program.video.update')->middleware('auth');
// Event 

    Route::get('/event/create/event',[EventsController::class,'create_event'])->name('event.create')->middleware('auth');
    Route::post('/event/store-event',[EventsController::class,'store_event'])->name('event.new.store')->middleware('auth');
    Route::get('view-all-events',[App\Http\Controllers\EventsController::class,'index'])->name('event.index')->middleware('auth');
    Route::get('event/{id}/edit',[App\Http\Controllers\EventsController::class,'edit'])->name('event.edit')->middleware('auth');
    Route::patch('event/{id}',[App\Http\Controllers\EventsController::class,'update'])->name('event.update')->middleware('auth');
    Route::get('event/add-participants/{id}',[App\Http\Controllers\EventsController::class,'create_event_participants'])->name('event.create.participants')->middleware('auth');
    Route::post('/event/store/participants',[EventsController::class,'store_event_participants'])->name('event.addparticipants.store')->middleware('auth');
    
    Route::get('event/eventparticipant/{eventparticipant_id}/edit',[App\Http\Controllers\EventsController::class,'edit_eventparticipant'])->name('event.eventparticipant.edit')->middleware('auth');
    Route::patch('event/eventparticipant/{eventparticipant_id}',[App\Http\Controllers\EventsController::class,'update_event_eventparticipant'])->name('event.eventparticipant.update')->middleware('auth');
    
    Route::get('event/add-objectives/{id}',[App\Http\Controllers\EventsController::class,'addobjective'])->name('event.add.objective')->middleware('auth');
    Route::post('/event/store/objective',[EventsController::class,'store_event_objective'])->name('event.addobjective.store')->middleware('auth');
    
    Route::get('event/eventobjective/{eventobjective_id}/edit',[App\Http\Controllers\EventsController::class,'edit_eventobjective'])->name('event.eventobjective.edit')->middleware('auth');
    Route::patch('event/eventobjective/{eventobjective_id}',[App\Http\Controllers\EventsController::class,'update_event_eventobjective'])->name('event.eventobjective.update')->middleware('auth');

    Route::get('event/add-photos/{id}',[App\Http\Controllers\EventsController::class,'add_event_photos'])->name('event.add.photos')->middleware('auth');
    Route::post('/event/store/photos',[EventsController::class,'store_event_photos'])->name('event.addphotos.store')->middleware('auth');
    
    Route::get('event/eventphoto/{eventphoto_id}/edit',[App\Http\Controllers\EventsController::class,'edit_eventphoto'])->name('event.eventphoto.edit')->middleware('auth');
    Route::patch('event/eventphoto/{eventphoto_id}',[App\Http\Controllers\EventsController::class,'update_event_eventphoto'])->name('event.eventphoto.update')->middleware('auth');
    
    Route::get('event/add-points/{id}',[App\Http\Controllers\EventsController::class,'addpoint'])->name('event.add.keypoints')->middleware('auth');
    Route::post('/event/store/keypoints',[EventsController::class,'store_key_points'])->name('event.addpoint.store')->middleware('auth');
    
    Route::get('event/keypoint/{keypoint_id}/edit',[App\Http\Controllers\EventsController::class,'edit_keypoint'])->name('event.keypoint.edit')->middleware('auth');
    Route::patch('event/keypoint/{keypoint_id}',[App\Http\Controllers\EventsController::class,'update_event_keypoint'])->name('event.keypoint.update')->middleware('auth');

    Route::get('event/add-video/{id}',[App\Http\Controllers\EventsController::class,'video'])->name('event.add.video')->middleware('auth');
    Route::post('/event/store/video',[EventsController::class,'store_event_video'])->name('event.video.store')->middleware('auth');
    
    Route::get('event/video/{video_id}/edit',[App\Http\Controllers\EventsController::class,'edit_event_video'])->name('event.video.edit')->middleware('auth');
    Route::patch('event/video/{video_id}',[App\Http\Controllers\EventsController::class,'update_event_video'])->name('event.video.update')->middleware('auth');

    Route::get('event/add-mentors/{id}',[App\Http\Controllers\EventsController::class,'create_event_mentors'])->name('event.add.mentor')->middleware('auth');
    Route::post('/event/store/mentors',[EventsController::class,'store_event_mentors'])->name('event.addmentors.store')->middleware('auth');

    Route::get('event/eventmentor/{eventmentor_id}/edit',[App\Http\Controllers\EventsController::class,'edit_eventmentor'])->name('event.eventmentor.edit')->middleware('auth');
    Route::patch('event/eventmentor/{eventmentor_id}',[App\Http\Controllers\EventsController::class,'update_event_eventmentor'])->name('event.event_eventmentor.update')->middleware('auth');

// Competition
    Route::get('/admin/competition/create-competition',[CompetitionController::class,'create_competition'])->name('competition.create')->middleware('auth');
    Route::post('/competition/store-competition',[CompetitionController::class,'store_competition'])->name('competition.new.store')->middleware('auth');
    Route::get('view-all-competitions',[App\Http\Controllers\CompetitionController::class,'index'])->name('competition.index')->middleware('auth');
    Route::get('competition/{id}/edit',[App\Http\Controllers\CompetitionController::class,'edit'])->name('competition.edit')->middleware('auth');
    Route::patch('competition/{id}',[App\Http\Controllers\CompetitionController::class,'update'])->name('competition.update')->middleware('auth');
    Route::get('competition/add-participants/{id}',[App\Http\Controllers\CompetitionController::class,'create_competition_participants'])->name('competition.create.participants')->middleware('auth');
    Route::post('/competition/store/participants',[CompetitionController::class,'store_competition_participants'])->name('competition.addparticipants.store')->middleware('auth');
    
    Route::get('competition/competitionparticipant/{competitionparticipant_id}/edit',[App\Http\Controllers\CompetitionController::class,'edit_competitionparticipant'])->name('competition.competitionparticipant.edit')->middleware('auth');
    Route::patch('competition/competitionparticipant/{competitionparticipant_id}',[App\Http\Controllers\CompetitionController::class,'update_competitionparticipant'])->name('competition.competitionparticipant.update')->middleware('auth');

    Route::get('competition/add-objectives/{id}',[App\Http\Controllers\CompetitionController::class,'addobjective'])->name('competition.add.objective')->middleware('auth');
    Route::post('/competition/store/objective',[CompetitionController::class,'store_competition_objective'])->name('competition.addobjective.store')->middleware('auth');
    
    Route::get('competition/objective/{objective_id}/edit',[App\Http\Controllers\CompetitionController::class,'edit_objective'])->name('competition.objective.edit')->middleware('auth');
    Route::patch('competition/objective/{objective_id}',[App\Http\Controllers\CompetitionController::class,'update_competition_objective'])->name('competition.objective.update')->middleware('auth');

    Route::get('competition/add-photos/{id}',[App\Http\Controllers\CompetitionController::class,'add_competition_photos'])->name('competition.add.photos')->middleware('auth');
    Route::post('/competition/store/photos',[CompetitionController::class,'store_competition_photos'])->name('competition.addphotos.store')->middleware('auth');
    
    Route::get('competition/competitionphoto/{competitionphoto_id}/edit',[App\Http\Controllers\CompetitionController::class,'edit_competitionphoto'])->name('competition.competitionphoto.edit')->middleware('auth');
    Route::patch('competition/competitionphoto/{competitionphoto_id}',[App\Http\Controllers\CompetitionController::class,'update_competitionphoto'])->name('competition.competitionphoto.update')->middleware('auth');

    Route::get('competition/add-points/{id}',[App\Http\Controllers\CompetitionController::class,'addpoint'])->name('competition.add.keypoints')->middleware('auth');
    Route::post('/competition/store/keypoints',[CompetitionController::class,'store_key_points'])->name('competition.addpoint.store')->middleware('auth');
    
    Route::get('competition/keypoint/{keypoint_id}/edit',[App\Http\Controllers\CompetitionController::class,'edit_keypoint'])->name('competition.keypoint.edit')->middleware('auth');
    Route::patch('competition/keypoint/{keypoint_id}',[App\Http\Controllers\CompetitionController::class,'update_competition_keypoint'])->name('competition.keypoint.update')->middleware('auth');

    Route::get('competition/add-video/{id}',[App\Http\Controllers\CompetitionController::class,'video'])->name('competition.add.video')->middleware('auth');
    Route::post('/competition/store/video',[CompetitionController::class,'store_competition_video'])->name('competition.video.store')->middleware('auth');
    
    Route::get('competition/video/{video_id}/edit',[App\Http\Controllers\CompetitionController::class,'edit_competition_video'])->name('competition.video.edit')->middleware('auth');
    Route::patch('competition/video/{video_id}',[App\Http\Controllers\CompetitionController::class,'update_competition_video'])->name('competition.video.update')->middleware('auth');

    Route::get('competition/add-mentors/{id}',[App\Http\Controllers\CompetitionController::class,'create_competition_mentors'])->name('competition.add.mentor')->middleware('auth');
    Route::post('/competition/store/mentors',[CompetitionController::class,'store_competition_mentors'])->name('competition.addmentors.store')->middleware('auth');
    
    Route::get('competition/competitionmentor/{competitionmentor_id}/edit',[App\Http\Controllers\CompetitionController::class,'edit_competitionmentor'])->name('competition.mentor.edit')->middleware('auth');
    Route::patch('competition/competitionmentor/{competitionmentor_id}',[App\Http\Controllers\CompetitionController::class,'update_competition_competitionmentor'])->name('competition.competition_mentor.update')->middleware('auth');

    Route::get('competition/add-winner/{id}',[App\Http\Controllers\CompetitionController::class,'create_competition_winner'])->name('competition.add.winner')->middleware('auth');
    Route::post('/competition/store/winner',[CompetitionController::class,'store_competition_winner'])->name('competition.addwinner.store')->middleware('auth');

    Route::get('competition/winner/{competitionwinner_id}/edit',[App\Http\Controllers\CompetitionController::class,'edit_competitionwinner'])->name('competition.winner.edit')->middleware('auth');
    Route::patch('competition/competitionwinner/{competitionwinner_id}',[App\Http\Controllers\CompetitionController::class,'update_competitionwinner'])->name('competition.winner.update')->middleware('auth');
});
