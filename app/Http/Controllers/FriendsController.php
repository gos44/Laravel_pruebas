<?php

namespace App\Http\Controllers;

use App\Models\friends; 
use Illuminate\Http\Request;


class FriendsController extends Controller
{

    
public function amigos(){

    return view('film_friends');

}
    public function verificarAmigos(Request $request)
    {
        $num1 = $request->input('numero1');
        $num2 = $request->input('numero2');

        $sumaDivisoresNum1 = $this->sumarDivisores($num1);
        $sumaDivisoresNum2 = $this->sumarDivisores($num2);

     
        $esPrimoNum1 = $this->esPrimo($num1);
        $esPrimoNum2 = $this->esPrimo($num2);

        $friend = new friends();
        $friend->numero1 = $num1;
        $friend->numero2 = $num2;
        $friend->numero1_amigo = $esPrimoNum1 ? 'amigo' : 'No amigo';
        $friend->numero2_amigo = $esPrimoNum2 ? 'amigo' : 'No amigo';
        $friend->save();

        if ($sumaDivisoresNum1 == $num2 && $sumaDivisoresNum2 == $num1) {
            return "Los números $num1 y $num2 son amigos y ambos son primos.";
        } else {
            return "Los números $num1 y $num2 no son amigos o no son primos.";
        }
    }

    private function sumarDivisores($numero)
    {
        $suma = 0;
        for ($i = 1; $i <= $numero / 2; $i++) {
            if ($numero % $i === 0) {
                $suma += $i;
            }
        }
        return $suma;
    }

    private function esPrimo($numero)
    {
        if ($numero <= 1) {
            return false;
        }
        for ($i = 2; $i <= sqrt($numero); $i++) {
            if ($numero % $i === 0) {
                return false;
            }
        }
        return true;
    }
}

   