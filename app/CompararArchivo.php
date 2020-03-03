<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompararArchivo extends Model
{
    protected $table = 'comparar_archivo';

    protected $fillable = [
      'message_id',
      'event',
      'subject',
      'from',
      'email',
      'categories'
    ];


}
