<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArchivoModel extends Model
{
  protected $table = 'archivos';

  protected $fillable = [
  'identificacion',
  'nombre',
  'apellido',
  'email',
  'event'
  ];
}
