<?php

namespace App\Http\Controllers;

use App\User;
use App\Contacten;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class ContactenController extends Controller
{
    public function index()
    {
        $user =User::where('id', '=', Auth::user()->getAuthIdentifier())->first();
        $contacten = Contacten::where('Userid', '=', Auth::user()->getAuthIdentifier())->Get();
        $data = array('user'=>$user,'contacten' => $contacten);
        return view('contacten.contacten', $data);
    }

    public function create()
    {
        return view('contacten.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'contactcode' => 'required',
            ]);
        $contact =User::where('Contactcode', '=', $request->contactcode)->first();
        if (!$contact == null) {
            $user =User::find(Auth::user()->getAuthIdentifier());
            $newcontact = new Contacten();
            $newcontact->Userid = $user->id;
            $newcontact->Contactid = $contact->id;
            $newcontact->Naamcontact = $request->contactname;
            $newcontact->Save();
            return redirect('/contacten');
        } else {
            return Redirect::to('/nieuwcontact')->with('message', 'Contactcode bestaat niet!');
        }
    }
}
