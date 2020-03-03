<div class="container">
    <div class="row">
      <div class="col-md-12">
        @if (session('info'))
        <div class="alert alert-success" role="alert">
          <strong class="alert-heading">Info!</strong>{{session('info')}}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>

        </div>
        @endif
      </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <form method="post" action="{{url('productos')}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                           <p>Archivo 1</p>
                           <input class="form-control" type="file" name="excel">
                        </div>
                        <input type="submit" value="Enviar" style="padding: 10px 20px;">
                    </form>
                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <a class="col-md-4 btn btn-primary" href="exportar">exportar comparacion estado open</a>
        <a class="col-md-4 btn btn-success" href="exportar_click">exportar comparacion estado click</a>
        <a class="col-md-4 btn btn-danger" href="eliminardata">eliminar datos</a>
    </div>
</div>
