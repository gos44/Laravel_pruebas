<?php

namespace App\Http\Controllers;

use App\Models\cousins;
use Illuminate\Http\Request;

class CousinsController extends Controller
{
    //
    public function Cousins()
    {
        return view('film5_cousins');
    }

    public function Cousins2(Request $request)
    {
        $a = $request->input("a");
        $primo = true;

        if ($a <= 1) {
            $primo = false;
        } else {
            for ($i = 2; $i <= sqrt($a); $i++) {
                if ($a % $i == 0) {
                    $primo = false;
                    break;
                }
            }
        }

        $resultado = $primo ? "primo" : "no es primo";

        // Guardar en la base de datos
        $cousins = new cousins([
            "a" => $a,
            "primo" => $resultado // Guardar si es primo o no
        ]);

        $cousins->save();

        return $resultado;
    }
}
