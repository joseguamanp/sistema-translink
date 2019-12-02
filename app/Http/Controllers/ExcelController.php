<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
class ExcelController extends Controller
{

	public function exportUsers($value='')
	{		 
		return Excel::download(new UsersExport, 'users.xlsx');
	}


	// import
	public function importUsers(Request $request)
	{
	    Excel::import(new UsersImport,$request->file("excel"));
	}

}
