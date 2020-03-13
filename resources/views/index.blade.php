@extends('plantilla')
@section('contenido')
<!-- Mensaje de bienvenida al sistema -->
<div class="text-center">
    <H1>UTVT</H1>
    <p class="lead text-gray-800 mb-5">-- ¡ Bienvenido ! --</p>
    <img src="{{asset('public/img/cuervo_logo.jpg')}}" alt="" height=400 width=400 class="img-md rounded-circle">
    <br><br>
    <p class="lead text-gray-800 mb-5">
        Sistema Automatizado de Información Integral y Trayectorias Educativas ( SAIIyTE v1 )
    </p>
</div>
@stop