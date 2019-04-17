<?php

namespace App\Http\Controllers;

use Mail;
use Cart;
use Session;
use Auth;
use Stripe\Charge;
use Stripe\Stripe;
use Illuminate\Http\Request;
use App\Order;

class CheckoutController extends Controller
{
    public function index()
    {   
        if(Cart::content()->count() == 0)
        {
            Session::flash('info', 'Your cart is still empty. do some shopping');
            return redirect()->back();
        }
        return view('checkout');
    }

    public function pay()
    {
        Stripe::setApiKey("sk_test_62bQpTPhmiXDjY5bAiL5Mam8");

        $charge = Charge::create([
            'amount' => Cart::total() * 100,
            'currency' => 'usd',
            'description' => '',
            'source' => request()->stripeToken
        ]);
        $items = Cart::content();
        $userId = Auth::id(); 
        foreach($items as $item){
            $order = new Order;
            $order->product_id = $item->id;
            $order->amount = $item->qty;
            $order->user_id = $userId;
            $order->save();
        }
        
        Session::flash('success', 'Purchase successfull. wait for our email.');

        Cart::destroy();

        //Mail::to(request()->stripeEmail)->send(new \App\Mail\PurchaseSuccessful);

        return redirect('/');
    }
}
