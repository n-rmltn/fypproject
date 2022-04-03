<?php

require '../../vendor/autoload.php';

// This is your test secret API key.
\Stripe\Stripe::setApiKey('sk_test_51KhCt7EpRCJdieCxRuQMaE5KkzGdd8z802jlgkZiGTgtWq6domqMUSgFB1GTCiGLvZ3kEo1lPZU6OGt5VXkcARna00tfwadhZT');

header('Content-Type: application/json');

$YOUR_DOMAIN = 'https://www.kbdmy.ml';

$checkout_session = \Stripe\Checkout\Session::create([
    'line_items' => [[
        # Provide the exact Price ID (e.g. pr_1234) of the product you want to sell
        'price' => 'price_1KhD0lEpRCJdieCxAVKUK4av',
        'quantity' => 1,
    ]],
    'mode' => 'payment',
    'success_url' => $YOUR_DOMAIN . '/',
    'cancel_url' => $YOUR_DOMAIN . '/',
    'shipping_address_collection' => [
        'allowed_countries' => ['MY'],
    ],
    'phone_number_collection' => [
        'enabled' => true,
    ],
]);

header("HTTP/1.1 303 See Other");
header("Location: " . $checkout_session->url);

?>
