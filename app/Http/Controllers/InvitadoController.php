<?php

namespace App\Http\Controllers;

use App\Models\Boleto;
use App\Models\Grupo;
use App\Models\Persona;
use App\Models\Sexo;
use Illuminate\Http\Request;

class InvitadoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $invitados = Persona::get_invitados();
        $sexos = Sexo::all();
        $grupos = Grupo::all()->sortBy('nombre');
        $confirmados = Persona::get_invitados(2);
        $pendientes = Persona::get_invitados(1);
        return view('invitado.index', compact(['invitados', 'sexos', 'grupos', 'confirmados', 'pendientes']));
    }

    public function get_info($id)
    {
        $invitado = Persona::find($id);
        return response()->json($invitado);
    }

    public function store(Request $request)
    {
        $persona = new Persona();
        $persona->nombre = $request->nombre;
        $persona->primer_apellido = $request->apellido;
        $persona->segundo_apellido = $request->apellido2;
        $persona->sexo_id = $request->sexo;
        $persona->evento_id = 1;

        if ($request->has('nuevo_grupo')) {
            $grupo = new Grupo();
            $grupo->nombre = $request->nuevo_grupo_nombre;
            $grupo->save();
        } else {
            $grupo = Grupo::find($request->grupo);
        }

        // Guardar persona en el grupo
        $persona->grupo_id = $grupo->id;

        if ($persona->save()) {
            // Asignar boleto
            $boleto_disponible = Boleto::get_boleto_disponible();
            $boleto = Boleto::find($boleto_disponible);
            $boleto->grupo_id = $grupo->id;
            $boleto->save();

            $persona->boleto_id = $boleto->id;
            $persona->save();
        } else {
            return back()->with('error', 'No se pudo guardar la persona');
        }
        
        return back()->with('success', 'Invitado creado correctamente');
    }

    public function edit(Request $request)
    {
        $persona = Persona::find($request->persona_id);
        $persona->nombre = $request->nombre;
        $persona->primer_apellido = $request->apellido;
        $persona->segundo_apellido = $request->apellido2;
        $persona->sexo_id = $request->sexo;

        if ($request->has('nuevo_grupo')) {
            $grupo = new Grupo();
            $grupo->nombre = $request->nuevo_grupo_nombre;
            $grupo->save();
        } else {
            $grupo = Grupo::find($request->grupo);
        }

        // Actualizar boleto al grupo
        $boleto = Boleto::find($persona->boleto_id);
        $boleto->grupo_id = $grupo->id;
        $boleto->save();

        // Guardar persona en el grupo
        $persona->grupo_id = $grupo->id;

        $persona->save();

        return back()->with('success', 'Invitado actualizado correctamente');
    }
}
