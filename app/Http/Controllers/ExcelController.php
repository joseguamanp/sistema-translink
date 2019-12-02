<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\ArchivoModel;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ResultadoArchivosExport;
use App\Exports\ResultadoArchivosClickExport;
use App\Imports\ArchivosImport;
use App\Imports\CompararArchivosImport;
use Illuminate\Support\Facades\DB;
class ExcelController extends Controller
{

	public function exportar()
	{
		return Excel::download(new ResultadoArchivosExport, 'resultado_comparacion_open.xlsx');
	}

	public function exportarClick()
	{
		return Excel::download(new ResultadoArchivosClickExport, 'resultado_comparacion_click.xlsx');
	}


	// import
	public function importUsers(Request $request)
	{
	    Excel::import(new ArchivosImport,$request->file("excel"));
			Excel::import(new CompararArchivosImport,$request->file("comparar"));
			return redirect("home")->with("info","Se han subido los 2 archivos");
	}

	public function eliminar()
	{
		$tabla=DB::table('comparar_archivo')->truncate();
		$tabla2=DB::table('archivos')->truncate();
		return redirect("home")->with("info","Se ha eliminado los datos");
	}

}
