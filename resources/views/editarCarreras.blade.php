<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Editar Carreras</title>
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
<form action ="{{route('actualizarCarreras',$consulta->id)}}" method = 'POST' onsubmit="return validacion()">
	{{csrf_field()}}

	<input id="id" name="id" type="hidden" value="{{$consulta->id}}" onblur="fieldSizeAcon()">
	<br>
	<p id="errorAcon"></p>
	
	Nombre carrera: <br>
	<input id="ncarrera" name="ncarrera" type="text" onblur="fieldSizeCarrera()">
	<br>
	<p id="errorCarrera"></p>
	<button id="guarda"><a href="indexCarrera"></a> guardar</button>
	
	Activo: <br>
	<input id="activo" name="activo" type="text" onblur="fieldSizeActivo()">
	<br>
	<p id="errorActivo"></p>
	
	<button id="guarda"><a href="indexCarrera"></a> guardar</button>
</form>
	</div>
	<script>
	const $inputNom = document.querySelector ("#ncarrera");
	const patronNom = /[a-zA-Z]+/;
	$inputNom.addEventListener("keydown", event =>{
			if (patronNom.test(event.key)) {
				document.getElementById('ncarrera').style.border="3px solid #00cc00";
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
		function fieldSizeCarrera (){
			var tam = document.getElementById("ncarrera").value;
			if (tam.length>=3 ){
				document.getElementById("errorCarrera").innerHTML = "";
			}else{
				document.getElementById("errorCarrera").innerHTML = "ERROR, tamaño del texto incorrecto";
				document.getElementById('ncarrera').style.border = "3px solid #ff0000";
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
	//--------------------------------------error con el input seleccionado------------------------------
		function fieldSizeActvio (){
			var tam = document.getElementById("activo").value;
			if (tam.length>=3 ){
				document.getElementById("errorAct").innerHTML = "";
			}else{
				document.getElementById("errorAct").innerHTML = "ERROR, tamaño del texto incorrecto";
				document.getElementById('activo').style.border = "3px solid #ff0000";
			}
		}
function validacion (){
//--------------------------------variables
	valorCarrera = document.getElementById("ncarrera").value;
	valorActivo = document.getElementById("activo").value;
//---------------------------validando campos
	if (valorCarrera == null || valorCarrera.length == 0 || /^\s+$/.test(valorCarrera)){
		document.getElementById("errorCarrera").innerHTML = "ERROR, campo vacio";
		document.getElementById('ncarrera').style.border = "3px solid #ff0000";
		return false;
	}else
	if (valorActivo == null || valorActivo.length == 0 || /^\s+$/.test(valorActivo)){
		document.getElementById("errorActi").innerHTML = "ERROR, campo vacio";
		document.getElementById('activo').style.border = "3px solid #ff0000";
		return false;
	}else
	{
		return true;
	}
}
	</script>	

</body>
</html>
