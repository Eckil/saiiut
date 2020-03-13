<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Aspirantes</title>
  </head>
  <body>
    <div class="container">
    <br />
      <table>
        <th>id</th>
        <th>Nombre aspirante</th>
        <th>apellido paterno</th>
        <th>apellido materno</th>
        <th>sexo</th>
        <th>fecha de nacimiento</th>
        <th>pais de origen</th>
        <th>estado civil</th>
        <th>CURP</th>
        <th>RFC</th>
        <th>PESO</th>
        <th>estatura</th>
        <th>tipo de sangre</th>
        <th>fam diabetico</th>
        <th>fam hipertenso</th>
        <th>fam cardiaco</th>
        <th>ceneval</th>
        <th>folioint</th>
        <th>estado procedencia</th>
        <th>mun procedencia</th>
        <th>esc procedencia</th>
        <th>esp prcedencia</th>
        <th>ano ini proc</th>
        <th>ano fin proc</th>
        <th>promedio procedencia</th>
        <th>nombre tutor</th>
        <th>apellido paterno tutor</th>
        <th>apellido materno tutor</th>
      @foreach($aspirantes as $aspi)
      <tr>
        <td>{{$aspi->id}}</td>
        <td>{{$aspi->nAspirante}}</td>
        <td>{{$aspi->apAspirante}}</td>
        <td>{{$aspi->amAspirante}}</td>
        <td>{{$aspi->sexo}}</td>
        <td>{{$aspi->fechaNac}}</td>
        <td>{{$aspi->paisOrigen}}</td>
        <td>{{$aspi->EstadoCivil}}</td>
        <td>{{$aspi->CURP}}</td>
        <td>{{$aspi->RFC}}</td>
        <td>{{$aspi->peso}}</td>
        <td>{{$aspi->estatura}}</td>
        <td>{{$aspi->tSangre}}</td>
        <td>{{$aspi->famDiabetico}}</td>
        <td>{{$aspi->famHipertenso}}</td>
        <td>{{$aspi->famCardiaco}}</td>
        <td>{{$aspi->ceneval}}</td>
        <td>{{$aspi->folioInt}}</td>
        <td>{{$aspi->estadoProc}}</td>
        <td>{{$aspi->munProc}}</td>
        <td>{{$aspi->escProcedencia}}</td>
        <td>{{$aspi->espProcedencia}}</td>
        <td>{{$aspi->anoIniProce}}</td>
        <td>{{$aspi->anoFinProce}}</td>
        <td>{{$aspi->promedioProce}}</td>
        <td>{{$aspi->nTutor}}</td>
        <td>{{$aspi->apTutor}}</td>
        <td>{{$aspi->amTutor}}</td>
        <td><a class="btn btn-primary btn-xs" href="{{action('aspirantesController@modificaAspirantes', $aspi->id )}}">editar</a> </td>
        <td>
            <form action="{{action('aspirantesController@eliminaAspirantes',$aspi->id)}}" method="POST">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Eliminar</button>
            </form>
        </td>
        </tr>
      @endforeach
  </table>
  <button type="button" ><a href="nuevoAspirantes">nuevo Aspirante</a> </button>
  </div>
  </body>
</html>
