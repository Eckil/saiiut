<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ACONOCIMIENTO</title>
  </head>
  <body>
    <div class="container">
    <br />
      <table>
        <th>id</th>
        <th>aconocimiento</th>
        <th>activo</th>
        <th>editar</th>
        <th>eliminar</th>
      @foreach($aconocimiento as $acon)
      <tr>
        <td>{{$acon->id}}</td>
        <td>{{$acon->aconocimiento}}</td>
        <td>{{$acon->activo}}</td>
        <td><a class="btn btn-primary btn-xs" href="{{action('controlador@modificaAconocimiento', $acon->id )}}">editar</a> </td>
        <td>
        <form action="{{action('controlador@eliminaAconocimiento',$acon->id)}}" method="POST">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Eliminar</button>
            </form></td>
        </tr>
      @endforeach
  </table>
  <button type="button" ><a href="nuevoAconocimiento">nuevo aconocimiento</a> </button>
  </div>
  </body>
</html>
