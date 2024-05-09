<?php

namespace App\Http\Controllers;

use App\Models\Inverted_phrase;
use Illuminate\Http\Request;

class InvertedPhraseController extends Controller
{
    //
    public function inverted(){

        return view('film_Inverted_phrase');

    }


    public function inverted2(Request $request){
     
        $frase = $request->input('frase');
    
       
        $inv = strrev($frase);   
        $invertedPhrase = new Inverted_phrase();
        $invertedPhrase->frase = $inv;
        $invertedPhrase->save();
    
        return $invertedPhrase;
    }
}