<?php

namespace App\Http\Controllers;

use App\Betaling;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KalenderController extends Controller
{
    public function index()
    {

        return view('kalender.kalender');
    }
    public function getData() {
        $sentjes = betaling::where('PersonID', '=', Auth::user()->getAuthIdentifier())->get();
        response()->json($sentjes);
        return response()->json($sentjes);
    }
}
