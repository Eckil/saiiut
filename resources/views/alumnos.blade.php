<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Practica - Javascript</title>
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
 <<script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
	  <script src="{{asset('js/jquery-ui.js')}}"></script>

</head>
<body oncopy="return false" onpaste="return false">
<div class="content">


<br>
<br>
<h1>PATTERN</h1>
<br><br>
<br><br>
<form action ="{{route('guarda')}}" method = 'POST'>
{{csrf_field()}}
matricula <br>
	<input id="matricula" name="matricula" type="text" onblur="fieldSizeMat()">
	<br>
	<p id="errorMat"></p>
nombre <br>
	<input id="nombre" name="nombre" type="text" onblur="fieldSizeNom()">
	<br>
	<p id="errorNom"></p>
app <br>
	<input id="app" name="app" type="text" onblur="fieldSizeApp()">
	<br>
	<p id="errorApp"></p>
apm <br>
	<input id="apm" name="apm" type="text" onblur="fieldSizeApm()">
	<br>
	<p id="errorApm"></p>
	<!--<select class="form-control" id="alumnos" name="_id">
			<option id="opcion" value="0">--- Selecciona componente ---</option>
			@foreach($alumno as $alum)
				<option value="{{$alum->_id}}">{{$alum->nombre}}</option>
			@endforeach -->
		</select>
		<select class="form-control" id="materias" name="materias">
			<option id="opcion2" value="0">--- Selecciona carrera ---</option>
			@foreach($materias as $mat)
				<option value="{{$mat->nombre}}">{{$mat->nombre}}</option>
			@endforeach
		</select>
	<button id="guarda">guardar</button>
</form>

	<script>
	
		
		const $inputMat = document.querySelector ("#matricula");
		const patronM = /[0-9]+/;
		
		const $inputNom = document.querySelector ("#nombre");
		const patronNom = /[a-zA-Z]+/;

		const $inputApp = document.querySelector ("#app");
		const patronApp = /[a-zA-Z]+/;

		const $inputApm = document.querySelector ("#apm");
		const patronApm = /[a-zA-Z]+/;


		

		$inputMat.addEventListener("keydown", event =>{
			if (patronM.test(event.key)) {
				document.getElementById('matricula').style.border="3px solid #00cc00";
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

		$inputNom.addEventListener("keydown", event =>{
			if (patronNom.test(event.key)) {
				document.getElementById('nombre').style.border="3px solid #00cc00";
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

		$inputApp.addEventListener("keydown", event =>{
			if (patronApp.test(event.key)) {
				document.getElementById('app').style.border="3px solid #00cc00";
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

		$inputApm.addEventListener("keydown", event =>{
			if (patronApm.test(event.key)) {
				document.getElementById('apm').style.border="3px solid #00cc00";
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


		function fieldSizeMat (){
			var tam = document.getElementById("matricula").value;
			if (tam.length>=9 && tam.length<=12){
				document.getElementById("errorMat").innerHTML = "";
			}else{
				document.getElementById("errorMat").innerHTML = "error tamaño del texto incorrecto";
				document.getElementById("matricula").style.border = "3px solid #ff0000";
			}
		}

		function fieldSizeNom (){
			var tam = document.getElementById("nombre").value;
			if (tam.length>=3 ){
				document.getElementById("errorNom").innerHTML = "";
			}else{
				document.getElementById("errorNom").innerHTML = "error tamaño del texto incorrecto";
				document.getElementById('nombre').style.border = "3px solid #ff0000";
			}
		}

		function fieldSizeApp (){
			var tam = document.getElementById("app").value;
			if (tam.length>=5 ){
				document.getElementById("errorApp").innerHTML = "";
			}else{
				document.getElementById("errorApp").innerHTML = "error tamaño del texto incorrecto";
				document.getElementById('app').style.border = "3px solid #ff0000";
			}
		}

		function fieldSizeApm (){
			var tam = document.getElementById("apm").value;
			if (tam.length>=5 ){
				document.getElementById("errorApm").innerHTML = "";
			}else{
				document.getElementById("errorApm").innerHTML = "error tamaño del texto incorrecto";
				document.getElementById('apm').style.border = "3px solid #ff0000";
			}
		}
		
	</script>
	<script type="text/javascript">
		$(document).ready(function(){
		$("#materias").click(function(){
			var cambio = $("#materias").val();
			console.log(cambio)
		});
	});
	</script>	<!--se referencia a la ruta-->

	</div>
</body>
</html>
