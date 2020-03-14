<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Nueva area de conocimiento</title>
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

      <br>
      <h1>Alta Login</h1>
      <br>

      <form action="{{route('guardaLogin')}}" method='POST'>
         {{csrf_field()}}

         <p id="errorAcon"></p>
         Nombre del usuario: <br>
         <input id="aconocimiento" name="nombreUsuario" type="text" onblur="fieldSizeAcon()">
         <br>

         <p id="errorAcon"></p>
         Apellido paterno: <br>
         <input id="activo" name="apellidoPaterno" class="number" onblur="fieldSizeact()">
         <br>

         <p id="errorAcon"></p>
         Apellido materno: <br>
         <input id="activo" name="apellidoMaterno" class="number" onblur="fieldSizeact()">
         <br>

         <p id="errorAcon"></p>
         Login: <br>
         <input id="activo" name="login" class="number" onblur="fieldSizeact()">
         <br>

         <p id="errorAcon"></p>
         Perfil: <br>
         <input id="activo" name="perfil" class="number" onblur="fieldSizeact()">
         <br>

         <p id="errorAcon"></p>
         Correo: <br>
         <input id="activo" name="correo" class="number" onblur="fieldSizeact()">
         <br>

         <p id="errorAcon"></p>
         Activo: <br>
         <input id="activo" name="activo" class="number" onblur="fieldSizeact()">
         <br>

         <p id="errorAcon"></p>
         Activar Sistema: <br>
         <input id="activo" name="activarSistema" class="number" onblur="fieldSizeact()">
         <br>

         <p id="errorAct"></p>
         <button id="guarda"><a href="indexaconocimiento"></a> guardar</button>
      </form>
   </div>
</body>

</html>