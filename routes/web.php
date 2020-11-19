<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutUsController;

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

/*about us*/

Route::get('our-people',[AboutUsController::class,'our_people'])->name('about_us.our_people');
Route::get('our-story',[AboutUsController::class,'our_story'])->name('about_us.our_story');
Route::get('our-work',[AboutUsController::class,'our_work'])->name('about_us.our_work');
/*end of about us*/

Route::get('/', function () {
    return view('welcome');
});


