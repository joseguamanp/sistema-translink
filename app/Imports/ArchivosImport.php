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
      /*$ordenNumber=true;
          while($ordenNumber){
                 $codigo = mt_rand(1000000000, 9999999999);
                 if(ArchivoModel::where('codigo', $codigo)->count()<=0):
                     $flag = false;
                 endif;
          }
      if (!$ordenNumber):*/
        return new ArchivoModel([
          'identificacion'=> $row[0],
          'apellido'=> $row[2],
          'nombre'=> $row[1],
          'email'=> $row[3],
          'event'=>$row[4],
          //'codigo'=>$codigo,
        ]);
    //  endif;
    }
}
