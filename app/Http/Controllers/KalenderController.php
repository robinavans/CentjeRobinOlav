<?php

namespace App\Http\Controllers;

use App\Betaling;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KalenderController extends Controller
{
    public function index()
    {

//
//        $events = [];
//        $events[] = \Calendar::event(
//            "Event One",
//            true,
//            '2019-01-02t0900',
//            '2019-01-06t0800',
//            0
//        );
//
//
//
//
//        $calendar = \Calendar::addEvents($events)
//            ->setOptions([
//                'firstDay' => 1
//            ])->setCallbacks([
//
//            ]);

        return view('kalender.kalender');
    }
    public function getData() {
        $sentjes = betaling::where('PersonID', '=', Auth::user()->getAuthIdentifier())->get();
        response()->json($sentjes);
        return response()->json($sentjes);
    }
}
