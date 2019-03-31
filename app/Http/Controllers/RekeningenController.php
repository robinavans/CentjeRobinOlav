<?php

namespace App\Http\Controllers;

use App\rekeningen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RekeningenController extends Controller
{

    public function index($lang = null)
    {
        App::setlocale($lang);
        $rekeningen = rekeningen::where('Userid', '=', Auth::user()->getAuthIdentifier())->get();

        return view("Rekeningen.Rekeningen", ['rekeningen' => $rekeningen]);
    }

    public function create()
    {
        return view('rekeningen.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'rekeningnummer' => 'required',
        ]);
        $rekening = new rekeningen();

        $rekening->Userid = Auth::user()->getAuthIdentifier();
        $rekening->name = request('name');
        $rekening->rekeningnummer = Hash::make(request('rekeningnummer'));
        $rekening->vermogen = '0';

        $rekening->save();
        return redirect('/rekeningen');
    }

    public function delete(Request $request)
    {
        rekeningen::find($request->id)->delete();
        return redirect('/rekeningen');
    }
}
