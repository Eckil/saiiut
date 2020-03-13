<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Carreras</title>
  </head>
  <body>
    <div class="container">
    <br />
      <table>
        <th>id</th>
        <th>Carreras</th>
        <th>activo</th>
        <th>editar</th>
        <th>eliminar</th>
      @foreach($carreras as $carre)
      <tr>
        <td>{{$carre->id}}</td>
        <td>{{$carre->ncarrera}}</td>
        <td>{{$carre->activo}}</td>
        <td><a class="btn btn-primary btn-xs" href="{{action('controlador@modificaCarreras', $carre->id )}}">editar</a> </td>
        <td>
            <form action="{{action('controlador@eliminaCarreras',$carre->id)}}" method="POST">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Eliminar</button>
            </form>
        </td>
        </tr>
      @endforeach
  </table>
  <button type="button" ><a href="nuevoCarreras">nueva Carrera</a> </button>
  </div>
  </body>
</html>
