@extends('plantilla')
@section('contenido')
<!-- Formulario de estados -->
<form action="{{route('guardaEstados')}}" method='POST'>
    {{csrf_field()}}
    <div class="row">
        Nombre del estado:<input class="form-control" name="estado" type="text">
        <br>
        <button id="guarda" class="btn btn-success"><a href="indexCarrera"></a> guardar</button>
    </div>
</form>



@stop