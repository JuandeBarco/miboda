<?php

namespace App\Http\Controllers;

use App\Models\Boleto;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index($codigo = null)
    {
        $boleto = Boleto::where('codigo', $codigo)->first();
        $boletos_grupo = null;
        
        if (!$boleto) {
            $boleto = null;
        } else {
            $boletos_grupo = Boleto::get_boletos_grupo($boleto->grupo_id);
        }

        return view('welcome', compact(['boleto', 'boletos_grupo']));
    }

    public function validar_codigo(Request $request)
    {
        $codigo = $request->codigo;
        $boleto = Boleto::where('codigo', $codigo)->first();
        if (!$boleto) {
            return response()->json(['status' => 'error', 'message' => 'Código inválido']);
        }
        return response()->json(['status' => 'success', 'message' => 'Código válido']);
    }
}
