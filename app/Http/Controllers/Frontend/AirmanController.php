<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Models\Aircraft;
use App\Models\User;

class AirmanController extends Controller
{
    public function index()
    {
    	Log::debug('Welcome gentlemen');
	// Pobieramy aktywnych pilotów z ich rangami i lotami
	$pilots = User::with(['rank', 'pireps'])->where('state', 1)->get();
        // Przekazujemy do widoku
        return view('pages.airman', compact('pilots'));
     }
}
