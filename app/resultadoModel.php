<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class resultadoModel extends Model
{
    protected $table = 'resultado_archivos';

    protected $fillable = [
    'identificacion',
		'nombre',
		'apellido',
		'email',
    'codigo'
    ];


}
