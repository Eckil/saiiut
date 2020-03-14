<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <title>Login</title>
</head>

<body>
   <div class="container">
      <br />
      <table>
         <th>id</th>
         <th>Nombre Usuario</th>
         <th>Apellido materno</th>
         <th>Apellido paterno</th>
         <th>Login</th>
         <th>Perfil</th>
         <th>Correo</th>
         <th>Activo</th>
         <th>Activar Sistema</th>
         @foreach($datosLogin as $log)
         <tr>
            <td>{{$log->id}}</td>
            <td>{{$log->nombreUsuario}}</td>
            <td>{{$log->apellidoMaterno}}</td>
            <td>{{$log->apellidoPaterno}}</td>
            <td>{{$log->login}}</td>
            <td>{{$log->perfil}}</td>
            <td>{{$log->correo}}</td>
            <td>{{$log->activo}}</td>
            <td>{{$log->activarSistema}}</td>
            <td><a class="btn btn-primary btn-xs" href="{{action('loginController@modificaLogin', $log->id )}}">editar</a> </td>


            <td>
               <form action="{{action('loginController@EliminaLogin',$log->id)}}" method="POST">
                  @csrf
                  <input name="_method" type="hidden" value="DELETE">
                  <button class="btn btn-danger" type="submit">Eliminar</button>
               </form>
            </td>

         </tr>
         @endforeach
      </table>
      <button type="button"><a href="AltaLogin">Nuevo Usuario Login</a> </button>
   </div>
</body>

</html>