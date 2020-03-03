<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ProductoImport;
use App\Imports\UsersImport;
use Illuminate\Support\Facades\DB;
class productosController extends Controller
{
    public function excel(Request $request)
    {
      //Excel::import(new ProductoImport,$request->file("excel"));
      Excel::import(new UsersImport,$request->file("excel"));
    }

}
