<?php

namespace App\Http\Controllers;

use App\Models\Boleto;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function validar_entrada($codigo)
    {
        $boleto = Boleto::where('codigo', $codigo)->first();
        if ($boleto) {
            return response()->json(['status' => 'success', 'message' => 'Entrada validada correctamente']);
        } else {
            return response()->json(['status' => 'error', 'message' => 'No se encontró el código']);
        }
    }
}
