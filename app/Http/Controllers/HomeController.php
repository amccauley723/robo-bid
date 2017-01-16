<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        return view('client.dashboard');
    }
    public function leads()
    {
        return view('client.leads');
    }
    public function marketing()
    {
        return view('client.marketing');
    }
    public function profile()
    {
        return view('client.profile');
    }
}
