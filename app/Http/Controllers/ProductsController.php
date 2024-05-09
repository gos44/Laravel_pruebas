<?php

namespace App\Http\Controllers;
use App\Models\Products;
use Illuminate\Http\Request;


class ProductsController extends Controller
{
    
public function primos(){


return view("film_product");    

}

public function cosas(){


return view("");    

}

public function listarproduc(){
       
  $producto = Products::orderBy("id","desc")->get();
  return view("listarproducts",compact("producto"));
}


  public function formularioProducto(){

        return view('film_product');

    }


    public function show(Products $producto){
     
     // $producto = Products::find($id);
     // return $producto;
      return view('showproducts', compact('producto'));

  }

  public function destroy(Products $producto){
     
    // $producto = Products::find($id);
    // return $producto;

    $producto->delete();
     return redirect()->route("listarproduc");
     
 }



    public function productoStore(Request $request){

        $producto = new Products();
        $producto->name=$request->name;
        $producto->price=$request->price;
        $producto->description=$request->description;
        $producto->cant=$request->cant;
        $producto->date=$request->date;
        $producto->save();
        return $producto;


/* $table->id();
            $table->string('name');
            $table->integer('price');
            $table->text('description');
            $table->integer('cant');
            $table->date('date');
            $table->timestamps();

@foreach ($productos as $producto)
   @endforeach

*/
     }

     

}


