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
        ->select("archivos.email","archivos.identificacion",
        "archivos.nombre","comparar_archivo.event","comparar_archivo.subject")
        //->where("comparar_archivo.event","=","open")
        ->get();
        return $tabla;
    }
}
