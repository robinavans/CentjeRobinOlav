<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BetaalVerzoekenController extends Controller
{
    public function index()
    {
        return view('betaalverzoeken');
    }


}
