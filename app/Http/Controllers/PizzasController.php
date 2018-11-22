<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PizzasController extends Controller
{
    //

    public function getPizzas()
        {
            $pizzas = DB::table('fajták')->get();
            return view('pizza')->with('pizzas', $pizzas);
        }
        
    public function getOrders(Request $request )
    {
        return 'Sikeres rendelés';
        return  $name = $request->input('Görög');
      return  $name = $request->input('Hawaii');
       return $request;
    }
}
