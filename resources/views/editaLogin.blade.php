<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Editar el Login</title>
   <style>
      html,
      body {
         background-color: #fff;
         /* color: #636b6f; */
         font-family: 'Nunito', sans-serif;
         font-weight: 200;
         height: 100;
         margin: 0;

      }

      .content {
         text-align: center;
      }
   </style>
   <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
   <script src="{{asset('js/jquery-ui.js')}}"></script>
</head>


<body oncopy="return false" onpaste="return false">
   <div class="content">

      <br><br>
      <form action="{{route('editaLogin',$consulta)}}" method='POST'>
         {{csrf_field()}}

         Id del usuario: <br>
         <input id="id" name="id" readonly type="text" value="{{$consulta->id}}" onblur="fieldSizeAcon()">

         <input id="id" name="nombreUsuario" type="hidden" value="{{$consulta->nombreUsuario}}" onblur="fieldSizeAcon()">
         <br>

         <p id="errorAcon"></p>
         Nombre: <br>
         <input id="apellidoPaterno" name="aconocimiento" type="text" value="{{$consulta->apellidoPaterno}}" onblur="fieldSizeAcon()">
         <br>

         <p id="errorAcon"></p>
         Apellido Paterno: <br>
         <input id="activo" name="apellidoMaterno" type="text" class="text" value="{{$consulta->apellidoMaterno}}" onblur="fieldSizeact()">
         <br>

         <p id="errorAcon"></p>
         Apellido Materno: <br>
         <input id="activo" name="apellidoMaterno" type="text" class="text" value="{{$consulta->apellidoMaterno}}" onblur="fieldSizeact()">
         <br>

         <p id="errorAcon"></p>
         Login: <br>
         <input id="activo" name="login" type="text" class="text" value="{{$consulta->login}}" onblur="fieldSizeact()">
         <br>

         <p id="errorAcon"></p>
         perfil: <br>
         <input id="activo" name="perfil" type="text" class="text" value="{{$consulta->perfil}}" onblur="fieldSizeact()">
         <br>

         <p id="errorAcon"></p>
         correo: <br>
         <input id="activo" name="correo" type="text" class="text" value="{{$consulta->correo}}" onblur="fieldSizeact()">
         <br>

         <p id="errorAcon"></p>
         activo: <br>
         <input id="activo" name="activo" type="text" class="text" value="{{$consulta->activo}}" onblur="fieldSizeact()">
         <br>

         <p id="errorAcon"></p>
         activarSistema: <br>
         <input id="activo" name="activarSistema" type="text" class="text" value="{{$consulta->activarSistema}}" onblur="fieldSizeact()">
         <br>

         <button id="guarda"><a href="reporteLogin"></a> Guardar</button>
      </form>
   </div>
</body>

</html>