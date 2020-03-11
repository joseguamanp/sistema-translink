<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\CuponModel;
class CuponController extends Controller
{
  public function __construct()
  {
    //$this->count=$count;
  }
    public function index($value)
    {

        if (CuponModel::where("placa_vehicular","=",$value)->count() > 0):
          $data=CuponModel::where("placa_vehicular","=",$value)->first();
          $pdf = PDF::loadView('cupones2', compact('data'))->setPaper('a4', 'landscape')->download('cupon_tracklink.pdf');
          return $pdf;
          //return view("cupones",["data"=>$data]);
        endif;

    }
    public function index2()
    {
        //$datos=CuponModel::find($valor);
        $datos=CuponModel::all();
        //$datos=CuponModel::where("id",">","374")->get();
        //$datos=CuponModel::where("id",">","183")->get();
        $nombre="";
        $apellido="";
        foreach ($datos as $key => $data) {
          if ($data->nombre=="" || (!isset($data->nombre)) || $data->nombre==null) {
            $nombre="-";
          }else{
            $nombre=$data->nombre;
          }
          if($data->apellido=="" || (!isset($data->apellido)) || $data->apellido==null){
            $apellido="-";
          }else{
            $apellido=$data->apellido;
          }
          $pdf = PDF::loadView('cupones2', compact('data'))->setPaper('a4', 'landscape')
          ->save(public_path("pdf/").$data->id."-".$data->placa_vehicular.'.pdf')->stream($data->id."-".$data->nombre.$data->apellido.'.pdf');
        //  \Storage::disk('public')->put("pdf",$pdf);
        }
    }
    public function datos(Request $request)
    {
      $rango1=$request->input("rango1");
      $rango2=$request->input("rango2");
        $datos=CuponModel::where("id",">=",$rango1)->where("id","<=",$rango2)->get();
        $nombre="";
        $apellido="";
        foreach ($datos as $key => $data) {
          if ($data->nombre=="" || (!isset($data->nombre)) || $data->nombre==null) {
            $nombre="-";
          }else{
            $nombre=$data->nombre;
          }
          if($data->apellido=="" || (!isset($data->apellido)) || $data->apellido==null){
            $apellido="-";
          }else{
            $apellido=$data->apellido;
          }
          $pdf = PDF::loadView('cupones2', compact('data'))->setPaper('a4', 'landscape')
          ->save(public_path("pdf/").$data->id."-".$data->placa_vehicular.'.pdf')->stream($data->id."-".$data->nombre.$data->apellido.'.pdf');
        //  \Storage::disk('public')->put("pdf",$pdf);
        }
        return redirect("/");
    }
}
