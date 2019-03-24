<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\betaalverzoeken;
use Illuminate\Support\Facades\Auth;

class BetaalVerzoekenController extends Controller
{
    public function index()
    {
        $verzoeken = betaalverzoeken::where('Userid', '=', Auth::user()->getAuthIdentifier())->get();

        return view('betaalverzoeken', ['verzoeken' => $verzoeken]);
    }



}
