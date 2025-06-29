<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Checkout\Session;
use Stripe\Stripe;

class StripeController extends Controller
{
    public function checkout()
    {
        $cart = session()->get('cart');
        if (!$cart || count($cart) === 0) {
            return redirect()->route('cart.index')->with('error', 'Cart is empty.');
        }

        Stripe::setApiKey(config('services.stripe.secret'));

        $lineItems = [];
        foreach ($cart as $item) {
            $lineItems[] = [
                'price_data' => [
                    'currency' => 'inr',
                    'product_data' => [
                        'name' => $item['name'],
                    ],
                    'unit_amount' => $item['price'] * 100, // amount in paise
                ],
                'quantity' => $item['quantity'],
            ];
        }

        $session = Session::create([
            'line_items' => $lineItems,
            'mode' => 'payment',
            'success_url' => route('stripe.success'),
            'cancel_url' => route('cart.index'),
        ]);

        return redirect($session->url);
    }

    public function success()
    {
        session()->forget('cart'); // clear cart
        return view('stripe.success');
    }
}
