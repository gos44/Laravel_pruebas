<?php

namespace App\Http\Controllers;
use App\Models\library;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    //
    public function library(){

        return view('film_product');

    }
    public function library2(Request $request){

        $producto = new library();
        $producto->name=$request->name;
        $producto->days=$request->price;
        $producto->save();
        return $producto;
     }


}
