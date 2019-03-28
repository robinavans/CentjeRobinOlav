<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\betaalverzoeken;
use App\Betaling;

class BetalenController extends Controller
{
    public function index($id)
    {
        $verzoek = betaalverzoeken::where('id', '=', $id)->first();
        $user = User::where('id', '=', $verzoek->Userid)->first();
        $data = array('verzoek'=>$verzoek,'user' => $user);
        return view('betalen.betalen', $data);
    }

    public function betalen(Request $request)
    {
        $verzoek = betaalverzoeken::where('id', '=', $request->id)->first();
        $amount = $verzoek->amount .'.00';
        $betaling = new Betaling();
        $betaling->save();
        $mollie = new \Mollie\Api\MollieApiClient();
        $mollie->setApiKey("test_vQgKdvQe27VVCasB57VRJjqC99ATVE");
        $payment = $mollie->payments->create([
            "amount" => [
                "currency" => "EUR",
                "value" => $amount
            ],
            "method"      => \Mollie\Api\Types\PaymentMethod::IDEAL,
            "description" => $verzoek->description ,
            "redirectUrl" => "http://centje.localhost/callback/". $betaling->id,
            "webhookUrl"  => "https://example.org/webhook.php",
        ]);
        $betaling->Verzoekid = $verzoek->id;
        $betaling->Paymentstatus = $payment->status;
        $betaling->Paymentid = $payment->id;
        $betaling->Notities = $request->note;
        $betaling->save();;
        echo '<script>window.location = "'.$payment->getCheckoutUrl().'";</script>';
    }

    public function finish($id)
    {
        $mollie = new \Mollie\Api\MollieApiClient();
        $mollie->setApiKey("test_vQgKdvQe27VVCasB57VRJjqC99ATVE");
        $betaling = Betaling::find($id);
        $payment= $mollie->payments->get($betaling->Paymentid);
        $betaling->Paymentstatus = $payment->status;
        $betaling->save();
        return redirect('/betaalverzoeken');
    }
}
