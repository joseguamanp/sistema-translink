<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productoModel extends Model
{
  protected $table = 'producto';
  protected $fillable = [
  'id_sub_categoria',
  'titulo',
  'foto',
  'desc_comun',
  'caracteristica_dif',
  'codigo',
  'fecha',
  'A',
  'X',
  'T',
  'M',
  'W',
  'familia',
  'usuario',
  'desc_SCI',
  'estado_SCI',
  'fecha_deseada',
  'meta',
  'estado',
  'revision',
  'unidades_caja',
  'altura_caja',
  'ancho_caja',
  'profundidad_caja',
  'fecha_actualizacion_spaceman',
  'destacado',
  'marca',
  'group_id',
  'group_order'
  ];

  public $timestamps = false;
}
