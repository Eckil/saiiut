<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ciclo escolar</title>
  </head>
  <body>
    <div class="container">
    <br />
      <table>
        <th>id</th>
        <th>Ciclo escolar</th>
        <th>activo</th>
        <th>editar</th>
        <th>eliminar</th>
      @foreach($cicloesc as $cic)
      <tr>
        <td>{{$cic->id}}</td>
        <td>{{$cic->cicloesc}}</td>
        <td>{{$cic->activo}}</td>
        <td><a class="btn btn-primary btn-xs" href="{{action('cicloescController@modificaCicloesc', $cic->id )}}">editar</a> </td>
        <td>
            <form action="{{action('cicloescController@eliminaCicloesc',$cic->id)}}" method="POST">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Eliminar</button>
            </form>
        </td>
        </tr>
      @endforeach
  </table>
  <button type="button" ><a href="nuevoCicloesc">nuevo Ciclo escolar</a> </button>
  </div>
  </body>
</html>
