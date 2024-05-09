<?php

namespace App\Http\Controllers;
use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    //

    public function index(){
       
        $curso = Curso::orderBy("id","desc")->get();
        return view("listar",compact("curso"));
    }


    public function curso(){

        return view('cursos');
    }

    public function funcioncurso(Request $request){

        $curso = new Curso();
        $curso->name =  $request ->name ;
        $curso->descripcion= $request ->descripcion;
        $curso->save();
        return $curso;
        
    } 


}
