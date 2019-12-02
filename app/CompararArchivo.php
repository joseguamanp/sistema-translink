<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompararArchivo extends Model
{
    protected $table = 'comparar_archivo';

    protected $fillable = [
    'identificacion',
		'nombre',
		'apellido',
		'email',
    'event'
    ];


}
