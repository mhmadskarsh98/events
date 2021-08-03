<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class HomeController extends Controller
{
    public function index(){
        $events=Event::get();
        return view('home')->with('events',$events);
    }
}
