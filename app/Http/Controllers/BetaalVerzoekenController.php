<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\betaalverzoeken;
use App\rekeningen;
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
        $rekeningen = rekeningen::where('Userid', '=', Auth::user()->getAuthIdentifier())->get();
        return view('betaalverzoeken.create', ['rekeningen' => $rekeningen]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:255',
            'amount' => 'required',
            'rekening' => 'required',
        ]);

        $betaalverzoek = new betaalverzoeken();

        $betaalverzoek->Userid = Auth::user()->getAuthIdentifier();
        $betaalverzoek->name = request('name');
        $betaalverzoek->description = request('description');
        $betaalverzoek->amount = request('amount');
        $betaalverzoek->amountpaid = '0';
        $betaalverzoek->Rekeningid = request('rekening');

        $betaalverzoek->save();
        return redirect('/betaalverzoeken');
    }
}
