<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    //
    public function index(){
        return view ('checkout-page');
    }
    public function chargepayment(Request $request){
// Set your secret key. Remember to switch to your live secret key in production!
// See your keys here: https://dashboard.stripe.com/account/apikeys
\Stripe\Stripe::setApiKey('');

// Token is created using Checkout or Elements!
// Get the payment token ID submitted by the form:
$token = $_POST['stripeToken'];

$charge = \Stripe\Charge::create([
    'amount' => 60*100,
    'currency' => 'usd',
    'description' => 'Example charge',
    'source' => $token,
    'statement_descriptor' => 'Custom descriptor',
]);
dd($charge);
}

}