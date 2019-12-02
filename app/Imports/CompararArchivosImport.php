<?php

namespace App\Imports;

use App\CompararArchivo;
use Maatwebsite\Excel\Concerns\ToModel;

class CompararArchivosImport implements ToModel
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
                 if(CompararArchivo::where('codigo', $codigo)->count()<=0):
                     $flag = false;
                 endif;
          }
        if (!$ordenNumber):*/
          return new CompararArchivo([
            'identificacion'=> $row[0],
            'apellido'=> $row[1],
            'nombre'=> $row[2],
            'email'=> $row[3],
            'event'=>$row[4],
          //  'codigo'=>$codigo,
          ]);
        //endif;

    }
}
