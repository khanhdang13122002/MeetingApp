<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MeetingController;
use App\Http\Middleware\CheckIfAdmin;
use Doctrine\DBAL\Driver\Middleware;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('Client.Home',[HomeController::class]);
})->name("home");
Route::get("/Meetings/",function(){

    return view('Client.Meeting',[MeetingController::class,"Index"]);

})->name("meeting");
Route::get("/Meetings/MeetingDetail",function(){
    return view('Client.MeetingDetail',[MeetingController::class,"Detail"]);
})->name("meetingDetail");
