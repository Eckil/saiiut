<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Nueva carrera</title>
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
<h1>guardar ciclo escolar</h1>
<br><br>
<br><br>
<form action ="{{route('guardaCicloesc')}}" method = 'POST' onsubmit="return validacion()">
{{csrf_field()}}


ciclo escolar: <br>
	<input id="cicloesc" name="cicloesc" type="text" onblur="fieldSizeCiclo()">
	<br>
	<p id="errorCiclo"></p>
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

		function validacion (){
//--------------------------------variables
	valornCiclo = document.getElementById("cicloesc").value;
//---------------------------validando campos
	if (valornCiclo == null || valornCiclo.length == 0 || /^\s+$/.test(valornCiclo)){
		document.getElementById("errorCiclo").innerHTML = "ERROR, campo vacio";
		document.getElementById('cicloesc').style.border = "3px solid #ff0000";
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
