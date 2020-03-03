<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use App\productoModel;
use App\producto_detalleModel;

class ProductoImport implements ToModel
{
  /**
  * @param array $row
  *
  * @return \Illuminate\Database\Eloquent\Model|null
  */
    public function model(array $row)
    {
      /*$data=new productoModel([
        'id_sub_categoria'=> $row[2],
        'titulo'=> $row[3],
        'foto'=> '',
        'desc_comun'=>'',
        'caracteristica_dif'=> '',
        'codigo'=> $row[0],
        'fecha'=> date('Y-m-d'),
        'A'=> 0,
        'X'=> 0,
        'T'=> 0,
        'M'=> 0,
        'W'=> 0,
        'familia'=> $row[1],
        'usuario'=> 0,
        'desc_SCI'=> '',
        'estado_SCI'=> 'A',
        'fecha_deseada'=>  date('Y-m-d'),
        'meta'=> '',
        'estado'=>0,
        'revision'=> 0
      ]);
      */
      $producto = new producto_detalleModel([
      'CODIGO_PRODUCTO'=>$row[0],
      'PRECIO'=>$row[4]
    ]);
      return $producto;
    }
}
