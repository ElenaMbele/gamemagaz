<?php

namespace App\Http\Controllers;

use App\Mail\OrderMessage;
use App\Order;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    protected function showOrderForm(Product $product)
    {
        $email_user = auth()->user()->email;
        return view('order.orderForm', ['product' => $product, 'email_user' => $email_user]);
    }

    protected function addOrder(Product $product, Request $request)
    {
         $rules = [
             'name' => 'required|string',
             'email' => 'required|string',
         ];

         $request->validate($rules);

        $order = new Order();
        $order->product_id = $product->id;
        $order->user_name = $request->name;
        $order->user_email = $request->email;
        $order->save();
        Mail::to(Auth::user())->send(new OrderMessage(['order' => $order]));
        return view('order/successMessage');
    }
}
