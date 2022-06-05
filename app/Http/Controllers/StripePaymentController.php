<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StripePaymentController extends Controller
{
    /* Creates the checkout session and returns the session id in JSON format */
    public function payment()
    {
        // We grab the Stripe key information we added in the .env file
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        $YOUR_DOMAIN = env('APP_URL');
        // Creates the Stripe session
        $session = \Stripe\Checkout\Session::create([
            'line_items' => [[
                # Provide the exact Price ID (e.g. pr_1234) of the product you want to sell
                'price' => 'price_1Kr5WeDmnxMQagsyYOeME5rh',
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => $YOUR_DOMAIN . '/',
            'cancel_url' => route('checkout'),
            'shipping_address_collection' => [
                'allowed_countries' => ['MY'],
            ],
            'phone_number_collection' => [
                'enabled' => true,
            ],
        ]);

        // Return the Stripe Session id so the fetch command in our frontend redirects users to Stripe's checkout page

        return redirect()->to($session->url)->send();

    }
}
