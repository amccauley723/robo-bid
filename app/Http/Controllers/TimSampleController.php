<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TimSampleController extends Controller
{
    public function Timothy(){

        return view('greetings.timpage');
    }
}
