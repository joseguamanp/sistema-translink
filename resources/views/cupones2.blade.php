<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/main.css">
  <style media="screen">
    body{
      padding: 0;
      margin: 0;
    }
    .usuarios{
      position: absolute;
      top: 53px;
    }
    .marca_vehicular{
      top: 85px;
    }
    .modelo_vehicular{
      top: 136px;
    }
    .placa_vehicular{
      top: 185px;
    }
    .color{
      position: absolute;
      color: #0490ff;
      font-size: 14px;
      font-family: sans-serif;
      width: 300px;
      text-align: justify;
      left: 30px;
    }
    .vigencia{
      top: 230px;
    }
  </style>
</head>
<body>
<div class="row">
  <img width="100%" src="{{url('cupon-sia.jpg')}}" alt="">
  <div class="col-md-8">

  </div>
  <div class="col-md-4" >
    <p class="color usuarios">{{$data->apellido}}</p>
    <p class="color marca_vehicular">{{$data->marca_vehicular}} </p>
    <p class="color modelo_vehicular">{{$data->modelo_vehicular}}</p>
    <p class="color placa_vehicular">{{$data->placa_vehicular}}</p>
    <p class="color vigencia">{{date_format(new DateTime($data->vigencia_inicio),'d/m/Y')}} - {{date_format(new DateTime($data->vigencia_fin),'d/m/Y')}}</p>
</div>
</div>
</body>
</html>
