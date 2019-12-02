<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompararArchivo extends Model
{
    protected $table = 'archivos';

    protected $fillable = [
        'identificacion',
		'nombre',
		'apellido',
		'email',
		'created_at',
		'updated_at'
    ];


}
