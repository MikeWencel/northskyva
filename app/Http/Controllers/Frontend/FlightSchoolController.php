<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class FlightSchoolController extends Controller
{
    public function index()
    {
        return view('pages.flightschool');
    }
        public function program()
    {
        return view('pages.flightschool_program'); // <- nowa podstrona: program szkolenia
    }
}
