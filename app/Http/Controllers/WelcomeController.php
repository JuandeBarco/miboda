<?php

namespace App\Http\Controllers;

use App\Models\Boleto;
use App\Models\EstadoPersona;
use App\Models\Grupo;
use App\Models\Persona;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index($codigo = null)
    {
        $boleto = Boleto::where('codigo', $codigo)->first();
        $estado_invitados = EstadoPersona::all();
        $boletos_grupo = null;

        if (!$boleto) {
            $boleto = null;
        } else {
            $boletos_grupo = Boleto::get_boletos_grupo($boleto->grupo_id);
        }

        return view('welcome', compact(['boleto', 'boletos_grupo', 'estado_invitados']));
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

    public function confirmar_asistencia(Request $request)
    {
        $boleto = Boleto::where('codigo', $request->codigo_invitado)->first();
        $grupo = Grupo::where('id', $boleto->grupo_id)->first();
        $persona = Persona::where('id', $request->persona)->first();

        if ($persona->estado_id == 1 && $persona->grupo_id == $grupo->id)
        {
            if ($request->respuesta == 1)
            {
                $persona->estado_id = 2;
            } else {
                $persona->estado_id = 4;
            }
            $persona->celular = $request->celular;
            $persona->email = $request->correo;

            $persona->save();
            return response()->json(['success' => true, 'message' => 'Respuesta registrada', 'estado' => $persona->estado_id]);
        } else {
            return response()->json(['success' => false, 'message' => 'Despacio velocista, a este paso podrías hackear la NASA. Tómale un screenshot y enviasela a Juande para catafixiarla por una chela']);
        }
    }
}
