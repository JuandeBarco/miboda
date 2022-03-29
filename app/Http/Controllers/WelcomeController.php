<?php

namespace App\Http\Controllers;

use App\Models\Boleto;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index($codigo = null)
    {
        $boleto = Boleto::where('codigo', $codigo)->first();
        if (!$boleto) {
            $boleto = null;
        }
        return view('welcome', compact('boleto'));
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
