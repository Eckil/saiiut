<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Nueva area de conocimiento</title>
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
<h1>guardar ACONOCIMIENTO</h1>
<br><br>
<br><br>
<form action ="{{route('guardaAconocimiento')}}" method = 'POST' onsubmit="return validacion()">
{{csrf_field()}}


Aconocimiento: <br>
	<input id="aconocimiento" name="aconocimiento" type="text" onblur="fieldSizeAcon()">
	<br>
	<p id="errorAcon"></p>
	<button id="guarda"><a href="indexaconocimiento"></a> guardar</button>
</form>
	</div>

<script>
	const $inputNom = document.querySelector ("#aconocimiento");
	const patronNom = /[a-zA-Z]+/;
	$inputNom.addEventListener("keydown", event =>{
			if (patronNom.test(event.key)) {
				document.getElementById('aconocimiento').style.border="3px solid #00cc00";
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
		function fieldSizeAcon (){
			var tam = document.getElementById("aconocimiento").value;
			if (tam.length>=3 ){
				document.getElementById("errorAcon").innerHTML = "";
			}else{
				document.getElementById("errorAcon").innerHTML = "ERROR, tamaño del texto incorrecto";
				document.getElementById('aconocimiento').style.border = "3px solid #ff0000";
			}
		}

		function validacion (){
//--------------------------------variables
	valorAcon = document.getElementById("aconocimiento").value;
//---------------------------validando campos
	if (valorAcon == null || valorAcon.length == 0 || /^\s+$/.test(valorAcon)){
		document.getElementById("errorAcon").innerHTML = "ERROR, campo vacio";
		document.getElementById('aconocimiento').style.border = "3px solid #ff0000";
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
