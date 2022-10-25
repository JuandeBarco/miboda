<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Persona extends Model
{
    use HasFactory, SoftDeletes;

    public static function get_invitados($estatus = null)
    {
        $invitados = self::select(
            'personas.*',
            'grupos.nombre as grupo',
            'sexos.nombre as sexo',
            'estado_personas.nombre as estado',
            'boletos.codigo as boleto'
        )
        ->join('grupos', 'grupos.id', '=', 'personas.grupo_id')
        ->join('sexos', 'sexos.id', '=', 'personas.sexo_id')
        ->join('estado_personas', 'estado_personas.id', '=', 'personas.estado_id')
        ->leftJoin('boletos', 'boletos.id', '=', 'personas.boleto_id');

        if ($estatus) {
            $invitados = $invitados->where('personas.estado_id', $estatus);
        }
        
        return $invitados->get();
    }

    public static function get_emails()
    {
        return self::select(
            'email',
            DB::raw("(
                SELECT boletos.codigo
                FROM boletos
                Where boletos.id = personas.boleto_id
            ) as codigo")
        )
        ->where('estado_id', 2)
        ->groupBy('email')
        ->get();
    }
}
