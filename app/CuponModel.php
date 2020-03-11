<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CuponModel extends Model
{
    protected $table = 'cupon';

    protected $fillable = [
        'nombre',
        'apellido',
        'correo',
        'marca_vehicular',
        'modelo_vehicular',
        'placa_vehicular',
        'vigencia_fin',
        'vigencia_inicio'
    ];
}
