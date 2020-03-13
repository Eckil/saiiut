<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Subcarreras</title>
  </head>
  <body>
    <div class="container">
    <br />
      <table>
        <th>id</th>
        <th>Subcarreras</th>
        <th>idcarrera</th>
        <th>activo</th>
        <th>editar</th>
        <th>eliminar</th>
      @foreach($subcarreras as $subcar)
      <tr>
        <td>{{$subcar->id}}</td>
        <td>{{$subcar->nsubcarrera}}</td>
        <td>{{$subcar->idcarrera}}</td>
        <td>{{$subcar->activo}}</td>
        <td><a class="btn btn-primary btn-xs" href="{{action('controlador@modificaSubcarreras', $subcar->id )}}">editar</a> </td>
        <td>
            <form action="{{action('controlador@eliminaSubcarreras',$subcar->id)}}" method="POST">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Eliminar</button>
            </form>
        </td>
        </tr>
      @endforeach
  </table>
  <button type="button" ><a href="nuevoSubcarreras">nueva SubCarrera</a> </button>
  </div>
  </body>
</html>
