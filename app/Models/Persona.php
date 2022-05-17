<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Persona extends Model
{
    use HasFactory, SoftDeletes;

    public static function get_invitados()
    {
        return self::select(
            'personas.*',
            'grupos.nombre as grupo',
            'sexos.nombre as sexo',
            'estado_personas.nombre as estado',
        )
        ->join('grupos', 'grupos.id', '=', 'personas.grupo_id')
        ->join('sexos', 'sexos.id', '=', 'personas.sexo_id')
        ->join('estado_personas', 'estado_personas.id', '=', 'personas.estado_id')
        ->get();
    }
}
