<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Aircraft;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class FleetController extends Controller
{
    public function index()
    {		
		Log::error('testing fleet page');
		$fleet = Aircraft::all()->groupBy('icao');
		return view('pages.fleet', ['fleet' => $fleet]);
    }
}
