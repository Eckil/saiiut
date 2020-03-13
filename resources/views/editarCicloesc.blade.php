<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Editar Ciclo escolar</title>
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
<br><br>
<br><br>
<form action ="{{route('actualizarCicloesc',$consulta->id)}}" method = 'POST' onsubmit="return validacion()">
	{{csrf_field()}}

	<input id="id" name="id" type="hidden" value="{{$consulta->id}}" onblur="fieldSizeAcon()">
	<br>
	<p id="errorAcon"></p>
	ciclo escolar: <br>
	<input id="cicloesc" name="cicloesc" type="text" onblur="fieldSizeCiclo()" value="{{$consulta->cicloesc}}">
	<br>
	<p id="errorCiclo"></p>
		activo:<br>
		<input id="activo" name="activo" type="text" onblur="fieldSizeActivo()" value="{{$consulta->activo}}">
		<p id="errorAct"></p>
 <br>
	<button id="guarda"><a href="indexCicloesc"></a> guardar</button>
</form>
	</div>

	<script>
	const $inputNom = document.querySelector ("#cicloesc");
	const patronNom = /[a-zA-Z]+/;
	$inputNom.addEventListener("keydown", event =>{
			if (patronNom.test(event.key)) {
				document.getElementById('cicloesc').style.border="3px solid #00cc00";
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
		function fieldSizeCiclo (){
			var tam = document.getElementById("cicloesc").value;
			if (tam.length>=3 ){
				document.getElementById("errorCiclo").innerHTML = "";
			}else{
				document.getElementById("errorCiclo").innerHTML = "ERROR, tamaño del texto incorrecto";
				document.getElementById('cicloesc').style.border = "3px solid #ff0000";
			}
		}


	const $inputAct = document.querySelector ("#activo");
	const patronAct = /[a-zA-Z]+/;
	$inputAct.addEventListener("keydown", event =>{
			if (patronAct.test(event.key)) {
				document.getElementById('activo').style.border="3px solid #00cc00";
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
	
		function fieldSizeActivo (){
			var tam = document.getElementById("activo").value;
			if (tam.length>=2 ){
				document.getElementById("errorAct").innerHTML = "";
			}else{
				document.getElementById("errorAct").innerHTML = "ERROR, tamaño del texto incorrecto";
				document.getElementById('activo').style.border = "3px solid #ff0000";
			}
		}

		function validacion (){
//--------------------------------variables
	valornCiclo = document.getElementById("cicloesc").value;
	valorActivo = document.getElementById("activo").value;
//---------------------------validando campos
	if (valornCiclo == null || valornCiclo.length == 0 || /^\s+$/.test(valornCiclo)){
		document.getElementById("errorCiclo").innerHTML = "ERROR, campo vacio";
		document.getElementById('cicloesc').style.border = "3px solid #ff0000";
		return false;
	}else
	if (valornActivo == null || valornActivo.length == 0 || /^\s+$/.test(valornActivo)){
		document.getElementById("errorCiclo").innerHTML = "ERROR, campo vacio";
		document.getElementById('cicloesc').style.border = "3px solid #ff0000";
		return false;
	}else
	{
		return true;
	}
}
	</script></body>
</html>
