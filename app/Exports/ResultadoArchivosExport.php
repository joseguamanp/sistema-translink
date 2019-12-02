<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\DB;
class ResultadoArchivosExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $tabla=DB::table("comparar_archivo")->distinct()
        ->join("archivos","comparar_archivo.email","=","archivos.email")
        ->select("comparar_archivo.email","comparar_archivo.identificacion",
        "comparar_archivo.nombre","comparar_archivo.apellido","comparar_archivo.event")
        ->where("comparar_archivo.event","=","open")
        ->get();
        return $tabla;
    }
}
