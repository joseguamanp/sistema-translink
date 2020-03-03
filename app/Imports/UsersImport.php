<?php

namespace App\Imports;

use App\CuponModel;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\Hash;
class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
            return new CuponModel([
              'apellido' => $row[0],
              'apellido2' => $row[1],
              'nombre'  => $row[2],
              'nombre2'  => $row[3],
              'correo' => $row[4],
              'celular'=> $row[5],
              'placa_vehicular'=> $row[6],
              'marca_vehicular' => $row[7],
              'modelo_vehicular' => $row[8],
              'vigencia_inicio'=> \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[9]),
              'vigencia_fin'=> \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[10])
            ]);
      }
}
