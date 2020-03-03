<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class producto_detalleModel extends Model
{
  protected $table = 'detalle_producto';

  protected $fillable = [
  'CODIGO_PRODUCTO',
  'PESO',
  'PRECIO',
  'DESCUENTO',
  'STOCK',
  'ESTADO',
  'FECHA_ULT_ACTUALIZACION',
  'FECHA_CREADO',
  'FRACCIONARIO',
  'EMPAQUE',
  'DESPXEMP',
  'MEDIDA'
  ];

  public $timestamps = false;
}
