<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\betaalverzoeken;
use App\rekeningen;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class BetaalVerzoekenController extends Controller
{
    public function index($lang = null)
    {
        App::setLocale($lang);
        $verzoeken = betaalverzoeken::where('Userid', '=', Auth::user()->getAuthIdentifier())->get();

        return view('betaalverzoeken.betaalverzoeken', ['verzoeken' => $verzoeken]);
    }

    public function create($lang = null)
    {
        App::setLocale($lang);
        $rekeningen = rekeningen::where('Userid', '=', Auth::user()->getAuthIdentifier())->get();
        return view('betaalverzoeken.create', ['rekeningen' => $rekeningen]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:255',
            'amount' => 'required|digits_between:1,10|numeric',
            'rekening' => 'required',
            'valuta' => 'required',
            'verloopdatum'=> 'required|after:today',
        ]);

        $betaalverzoek = new betaalverzoeken();

        $betaalverzoek->Userid = Auth::user()->getAuthIdentifier();
        $betaalverzoek->name = request('name');
        $betaalverzoek->description = request('description');
        $betaalverzoek->amount = request('amount');
        $betaalverzoek->amountpaid = '0';
        $betaalverzoek->Rekeningid = request('rekening');
        $betaalverzoek->valuta = request('valuta');
        $betaalverzoek->verloopdatum = request('verloopdatum');

        $betaalverzoek->save();
        return redirect('/betaalverzoeken');
    }

    public function delete(Request $request)
    {
        betaalverzoeken::find($request->id)->delete();
        return redirect('/betaalverzoeken');
    }
}
