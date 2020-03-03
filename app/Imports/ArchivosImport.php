<?php

namespace App\Imports;

use App\ArchivoModel;
use Maatwebsite\Excel\Concerns\ToModel;

class ArchivosImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new ArchivoModel([
          'identificacion'=> $row[0],
          //'apellido'=> $row[1],
          'nombre'=> $row[1],
          'email'=> $row[2],
          'telefono'=>$row[3],
        ]);
    }
}
