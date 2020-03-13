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
<body oncopy="return false" onpaste="return false">
<div class="content">


<br>
<br>
<h1>guardar Subcarrera</h1>
<br><br>
<br><br>
<form action ="{{route('guardaSubcarreras')}}" method = 'POST' id="formulario" name="formulario" onsubmit="return validacion()">
{{csrf_field()}}


Nombre subcarrera: <br>
	<input id="nsubcarrera" name="nsubcarrera" type="text" onblur="fieldSizeSubcarrera()" >
	<br>
	<p id="errorSubcar"></p>
carrera: <br>
<select class="form-control" id="idcarrera" name="idcarrera" onchange="fieldSizeIdcarrera()">
			<option id="idcarrera" value="0">--- Selecciona componente ---</option>
			@foreach($carreras as $car)
				<option value="{{$car->ncarrera}}">{{$car->ncarrera}}</option>
			@endforeach
		</select><br>
		<p id="errorIdcarrera"></p>
	<button id="guarda"> guardar</button>
</form>
	</div>
	<script>
	//---------------------------------------input seleccionado y especificando entrada------------------------------------
	const $inputNom = document.querySelector ("#nsubcarrera");
	const patronNom = /[a-zA-Z]+/;
	$inputNom.addEventListener("keydown", event =>{
			if (patronNom.test(event.key)) {
				document.getElementById('nsubcarrera').style.border="3px solid #00cc00";
			}
			else{
				if(event.keyCode==8){
					//console.log("backspace");
				}
				else{
					event.preventDefault();
					//var tecla = event.keyCode;
					//console.log(tecla);
				}
			}
		});
	//--------------------------------------error con el input seleccionado------------------------------
		function fieldSizeSubcarrera (){
			var tam = document.getElementById("nsubcarrera").value;
			if (tam.length>=3 ){
				document.getElementById("errorSubcar").innerHTML = "";
			}else{
				document.getElementById("errorSubcar").innerHTML = "ERROR, tamaño del texto incorrecto";
				document.getElementById('nsubcarrera').style.border = "3px solid #ff0000";
			}
		}
//-------------------------------- aceptacion o error en el select
		function fieldSizeIdcarrera (){
			valoridcarrera = document.getElementById("idcarrera").selectedIndex;
			if (valoridcarrera != 0){
				document.getElementById('idcarrera').style.border="3px solid #00cc00";
				document.getElementById("errorIdcarrera").innerHTML = "";
			}else 
			if(valoridcarrera == 0){
				document.getElementById("errorIdcarrera").innerHTML = "ERROR, campo sin seleccionar";
				document.getElementById('idcarrera').style.border = "3px solid #ff0000";
			}		
		}
	//---------------------------------------validacion--------------------------------------------
	function validacion (){
//--------------------------------variables
	valornsubcarrera = document.getElementById("nsubcarrera").value;
	valoridcarrera = document.getElementById("idcarrera").selectedIndex;
//---------------------------validando campos
	if (valornsubcarrera == null || valornsubcarrera.length == 0 || /^\s+$/.test(valornsubcarrera)){
		document.getElementById("errorSubcar").innerHTML = "ERROR, campo vacio";
		document.getElementById('nsubcarrera').style.border = "3px solid #ff0000";
		return false;
	}else if(valoridcarrera == null || valoridcarrera == 0){
		document.getElementById("errorIdcarrera").innerHTML = "ERROR, campo sin seleccionar";
		document.getElementById('idcarrera').style.border = "3px solid #ff0000";
		
		return false;
	}else
	//---------------------------------campos validados
	{
		return true;
	}
}
	</script>
</body>
</html>
