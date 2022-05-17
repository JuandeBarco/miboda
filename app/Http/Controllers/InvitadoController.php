<?php

namespace App\Http\Controllers;

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
        return view('invitado.index', compact(['invitados', 'sexos', 'grupos']));
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

            $persona->grupo_id = $grupo->id;
        } else {
            $persona->grupo_id = $request->grupo;
        }

        $persona->save();
        
        return back()->with('success', 'Invitado creado correctamente');
    }
}
