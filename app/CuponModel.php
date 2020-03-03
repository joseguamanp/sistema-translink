<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CuponModel extends Model
{
  protected $table = 'cupon';

  protected $fillable = [
      'nombre',
      'apellido',
      'nombre2',
      'apellido2',
      'marca_vehicular',
      'modelo_vehicular',
      'placa_vehicular',
      'correo',
      'vigencia_inicio',
      'vigencia_fin',
      'celular',
      'chasis',
      'desc_cobertura',
      'tiempo_cobertura',
      'vendedor_interno',
      'tipo_sistema'
    ];
}
