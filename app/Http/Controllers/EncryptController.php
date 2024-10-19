<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EncryptController extends Controller
{
    public function encriptar(Request $request)
    {
        $clave = $request->input('clave');
        $mensaje = $request->input('mensaje');
        if( $clave == '' || $clave == null){
            $clave = 'DCJ';
        }
        $vocales = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
        $resultado = '';
        foreach (str_split($mensaje) as $letra) {
            if (in_array($letra, $vocales)) {
                $resultado .= $clave . $letra;
            } else {
                $resultado .= $letra;
            }
        }

        return response()->json(['resultado' => $resultado]);
    }
}
