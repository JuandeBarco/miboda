<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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
}
