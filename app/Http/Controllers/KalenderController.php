<?php

namespace App\Http\Controllers;

use App\Betaling;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class KalenderController extends Controller
{
    public function index($lang = null)
    {
        App::setlocale($lang);
        return view('kalender.kalender');
    }
    public function getData()
    {
        $sentjes = betaling::where('Personid', '=', Auth::user()->getAuthIdentifier())->get();
        response()->json($sentjes);
        return response()->json($sentjes);
    }
}
