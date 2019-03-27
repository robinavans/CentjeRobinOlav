<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\betaalverzoeken;

class BetalenController extends Controller
{
    public function index($id)
    {
        $verzoek = betaalverzoeken::where('id', '=', $id)->first();
        $amount = $verzoek->amount .'.00';
        $mollie = new \Mollie\Api\MollieApiClient();
        $mollie->setApiKey("test_vQgKdvQe27VVCasB57VRJjqC99ATVE");
        $payment = $mollie->payments->create([
            "amount" => [
                "currency" => "EUR",
                "value" => $amount
            ],
            "method"      => \Mollie\Api\Types\PaymentMethod::IDEAL,
            "description" => $verzoek->description ,
            "redirectUrl" => "http://centje.localhost/callback",
            "webhookUrl"  => "https://example.org/webhook.php",
        ]);
        echo '<script>window.location = "'.$payment->getCheckoutUrl().'";</script>';
    }
}
