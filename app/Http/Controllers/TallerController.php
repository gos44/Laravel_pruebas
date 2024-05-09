<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TallerController extends Controller
{
    //*donde se declarar funciones
    
   
   

    public function primos($dato1) {
        $Primo = true;
    
        if ($dato1 <= 1) {
            $Primo = false;
        } else {
            for ($i = 2; $i <= sqrt($dato1); $i++) {
                if ($dato1 % $i == 0) {
                    $Primo = false;
                    break;
                }
            }
        }
    
        if ($Primo) {
            return "El número {$dato1} es primo.";
        } else {
            return "El número {$dato1} no es primo.";
        }
    }

    public function Amigos ($num1, $num2){

        $suma1=0;
        
        $suma2=0;
        
        for ($i=1; $i < $num1; $i++){
  
        if ($num1%$i==0){ 
            $suma1+=$i;
        }
    }
       for( $k = 1; $k < $num2; $k++){
        
        if ($num2%$k==0) {
        
        $suma2+=$k;
    }
        
     if ($suma1==$num2 && $suma2 = $num1){
        
        return "los numeros{$num1} y {$num2} son numeros amigos ";
    }
    else{
        return "los numeros {$num1} y {$num2} no son numeros amigos ";
    }
} 
}
}