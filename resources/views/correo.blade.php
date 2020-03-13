<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Nueva subcarrera</title>
	<style>
		html, body {
			background-color:#fff:
			/* color: #636b6f; */
			font-family: 'Nunito', sans-serif;
			font-weight: 200;
			height: 100;
			margin: 0;

		}	
	.content {text-align: center;}
	</style>
 <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
	  <script src="{{asset('js/jquery-ui.js')}}"></script>

</head>
<body  >
<form action ="{{route('enviar')}}" method = 'GET' onsubmit="return validacion()">
<center>
<img src="">
Correo: <br>
	<input id="correo" name="correo" type="array" >
	<br>
Nombre:
<input id="nombre" name="nombre" type="text" >
	<br>
asunto:
<input id="asunto" name="asunto" type="text" >
	<br>
    cuerpo
<input id="cuerpo" name="cuerpo" type="text" >
	<br>
    imagen
<input id="imagen" name="imagen" type="text" >
	<br>

	<button id="guarda"> guardar</button>
</center>
</form>
</body>
</html>