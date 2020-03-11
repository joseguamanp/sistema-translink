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
      top: 87px;
    }
    .marca_vehicular{
      top: 157px;
    }
    .modelo_vehicular{
      top: 249px;
    }
    .placa_vehicular{
      top: 342px;
    }
    .color{
      position: absolute;
      right: 8%;
      color: #0490ff;
      font-size: 14px;
      font-family: sans-serif;
      width: 170px;
      text-align: center;
    }
    .vigencia{
      top: 442px;
    }
  </style>
</head>
<body>
<div class="row">
  <img width="100%" src="{{url('cupon-sia.jpg')}}" alt="">
  <div class="col-md-8">

  </div>
  <div class="col-md-4" >
    <p class="color usuarios">{{utf8_decode($data->nombre)}} {{utf8_decode($data->nombre2)}} {{utf8_decode($data->apellido)}} {{utf8_decode($data->apellido2)}}</p>
    <p class="color marca_vehicular">{{$data->marca_vehicular}} </p>
    <p class="color modelo_vehicular">{{$data->modelo_vehicular}}</p>
    <p class="color placa_vehicular">{{$data->placa_vehicular}}</p>
    <p class="color vigencia">{{date_format(new DateTime($data->vigencia_inicio),'d/m/Y')}} - {{date_format(new DateTime($data->vigencia_fin),'d/m/Y')}}</p>
</div>
</div>
</body>
</html>
