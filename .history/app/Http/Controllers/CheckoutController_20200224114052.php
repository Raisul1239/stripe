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
\Stripe\Stripe::setApiKey('pk_test_sYpbc3KdU6my88Pj4mZB1fcH00Qf1NjV4u');

$payment_intent = \Stripe\PaymentIntent::create([
  'payment_method_types' => ['card'],
  'amount' => 1000,
  'currency' => 'usd',
  'transfer_data' => [
    'destination' => '{{CONNECTED_STRIPE_ACCOUNT_ID}}',
  ],
]);
        
        
        // dd($request->all());
    }
}