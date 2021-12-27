<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Index(){

        // index app

        return view("Client.Home",[
            //data is empty array hehe
        ]);

    }
}
