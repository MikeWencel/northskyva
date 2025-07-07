<?php

namespace App\Http\Controllers\Frontend;

use App\Contracts\Controller;

class HomeController extends Controller
{
    public function index()
    {
	return view('pages.landing');
    }
}
