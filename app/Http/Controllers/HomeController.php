<?php

namespace App\Http\Controllers;

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
    public function index()
    {
        return view('home');
    }

    public function myTestAddToLog()
    {
        \LogActivity::addToLog('My Testing Add To Log.');
        dd('log insert successfully.');
    }

    public function logActivity()
    {
        $logs = \LogActivity::logActivityLists();
        return view('logActivity',compact('logs'));
    }
}
