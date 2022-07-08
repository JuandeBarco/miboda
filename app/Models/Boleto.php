<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Boleto extends Model
{
    use HasFactory, SoftDeletes;

    public static function get_boleto_disponible()
    {
        $boleto = self::select(
            'boletos.id',
        )
        ->where('estado_id', 1)
        ->where('grupo_id', null)
        ->first();

        return $boleto->id;
    }

    public static function get_boletos_grupo($grupo_id)
    {
        $boleto = self::select(
            'boletos.id',
            DB::raw('CONCAT(personas.nombre, " ", personas.primer_apellido, " ", personas.segundo_apellido) AS nombre_completo'),
        )
        ->join('personas', 'personas.boleto_id', '=', 'boletos.id')
        ->where('boletos.grupo_id', $grupo_id)
        ->get();

        return $boleto;
    }
}
