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

        return view('betaalverzoeken.betaalverzoeken', ['verzoeken' => $verzoeken]);
    }

    public function create()
    {
        return view('betaalverzoeken.create');
    }

    public function  store()
    {
        $betaalverzoek = new betaalverzoeken();

        $betaalverzoek->Userid = Auth::user()->getAuthIdentifier();
        $betaalverzoek->name = request('name');
        $betaalverzoek->description = request('description');
        $betaalverzoek->amount = request('amount');

        $betaalverzoek->save();
       return redirect('/betaalverzoeken');

    }

}
