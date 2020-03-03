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
          return new CompararArchivo([
            //'message_id'=> $row[0],
            'event'=> $row[0],
            'subject'=> $row[1],
            //'from'=> $row[3],
            'email'=>$row[2],
            //'categories'=>$row[5],
          ]);
    }
}
