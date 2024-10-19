<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SumaController extends Controller
{
    public function sumar(Request $request)
    {
        $array = $request->input('array');
//        $array = [3, 4, -7, 5, -6, 2, 5, -1, 8];
        $array = explode(',', $array);
        $suma = 0;
        $resultado = [];
        $posicion = 0;
        for ($i = 0; $i < count($array); $i++) {
            $suma = $suma + $array[$i];
            if($suma == 0) {
                if($i == count($array) -1) {
                    break;
                }
                $posicion = $i + 1;
            }
            if($i == count($array) - 1 ){
                $resultado[] = $array[$posicion];
                if($i == $posicion){
                    break;
                }
                $i = $posicion;
                $posicion++;
                $suma = 0;
            };
        }
        return response()->json(['resultado' => $resultado]);
    }
}
