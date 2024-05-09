<?php

namespace App\Http\Controllers;
use App\Models\market;
use Illuminate\Http\Request;

class MarketController extends Controller
{
    //

    public function mercardo(){

        return view('film2_product');

    }
    public function mercado2(Request $request){

        $producto = new market();
        $producto->product=$request->name;
        $producto->amount=$request->price;
        $producto->save();
        return $producto;
     }

}

