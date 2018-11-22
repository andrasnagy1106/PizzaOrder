<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orders;

class OrdersController extends Controller
{
    public function submit(Request $request){
        $this->validate($request, [
            'fajta' => 'required',
            'meret' => 'required'
        ]);

        $order = new Orders;
        $order->fajta = $request->input('fajta');
        $order->meret = $request->input('meret');

        $order->save();
       // return redirect('/');
       return 1234;
    }

    public function getOrders(){
        $orders = Orders::all();
        
        return view('orders')->with('orders', $orders);
    }
}
