<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeetingController extends Controller
{
    //
    public function Index(){

        //list of meeting
        return view('Client.Meeting');
    }
    public function Detail(){
        // get detail of meetings
        return view('Client.MeetingDetail');
    }
}
