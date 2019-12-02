@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <form method="post" action="{{url('import-excel')}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                           <p>Archivo 1</p> 
                           <input class="form-control" type="file" name="excel">
                        </div>
                        <div class="form-group">
                           <p>Archivo a comparar</p> 
                           <input class="form-control" type="file" name="comparar"> 
                        </div>
                        <input type="submit" value="Enviar" style="padding: 10px 20px;">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
