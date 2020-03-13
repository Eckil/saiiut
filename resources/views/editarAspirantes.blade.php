<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Editar Aspirantes</title>
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
<form action ="{{route('actualizarAspirantes',$consulta->id)}}" method = 'POST' onsubmit="return validacion()">
	{{csrf_field()}}

	<input id="id" name="id" type="hidden" value="{{$consulta->id}}" onblur="fieldSizeAcon()">
	<br>
	<p id="errorAcon"></p>
	Nombre aspirante: <br>
	<input id="nAspirante" name="nAspirante" type="text" onblur="fieldSizeNom()" value="{{$consulta->nAspirante}}">
	<br>
	<p id="errorNom"></p>
apellido paterno: <br>
	<input id="apAspirante" name="apAspirante" type="text"  onblur="fieldSizeApp()" value="{{$consulta->apAspirante}}">
	<br>
	<p id="errorApp"></p>

apellido materno: <br>
	<input id="amAspirante" name="amAspirante" type="text"  onblur="fieldSizeApm()" value="{{$consulta->amAspirante}}">
	<br>
	<p id="errorApm"></p>

sexo: <br>
	
	<input id="sexo" name="sexo" type="radio"  value="Femenino" value="{{$consulta->sexo}}">
	<label for="sexo">Femenino</label>
	<input id="sexo" name="sexo" type="radio"  value="Masculino" value="{{$consulta->sexo}}">
	<label for="sexo">Masculino</label><br>
	<p id="errorSexo"></p>
	

Fecha de nacimiento: <br>
	<input id="fechaNac" name="fechaNac" type="date"  value="{{$consulta->fechaNac}}">
	<br>
	<p id="errorFn"></p>

Pais de origen: <br>
	<input id="paisOrigen" name="paisOrigen" type="text"  onblur="fieldSizePais()" value="{{$consulta->paisOrigen}}">
	<br>
	<p id="errorPais"></p>

Estado civil: <br>
<select class="form-control" id="EstadoCivil" name="EstadoCivil" onchange="fieldSizeCivil()" value="{{$consulta->EstadoCivil}}">
			<option id="EstadoCivil" value="0">--- Selecciona estado ---</option>
				<option value="casado">Casado</option>
				<option value="soltero">soltero</option>
		</select><br>
		<p id="errorCivil"></p>
CURP: <br>
	<input id="CURP" name="CURP" type="text"  onblur="fieldSizeCURP()" oninput="actualizarRFC()" value="{{$consulta->CURP}}">
	<br>
	<p id="errorCURP"></p>

RFC: <br>
	<input id="RFC" name="RFC" type="text" maxlength="10" value="{{$consulta->RFC}}">
	<br>
	

Peso: <br>
	<input id="peso" name="peso" type="text"  onblur="fieldSizePeso()" value="{{$consulta->peso}}">kg
	<br>
	<p id="errorPeso"></p>

Estatura: <br>
	<input id="estatura" name="estatura" type="text"  onblur="fieldSizeEsta()" value="{{$consulta->estatura}}">
	<br>
	<p id="errorEsta"></p>

tipo de sangre: <br>
	
	<input id="tSangre" name="tSangre" type="radio"  value="A" >
	<label for="tSangre">A</label>
	<input id="tSangre" name="tSangre" type="radio"  value="B" >
	<label for="tSangre">B</label>
	<input id="tSangre" name="tSangre" type="radio"  value="O" >
	<label for="tSangre">O</label><br>
	<p id="errorSangre"></p>

famDiabetico: <br>
	<select class="form-control" id="famDiabetico" name="famDiabetico" onchange="fieldSizefamD()" value="{{$consulta->famDiabetico}}">
			<option id="famDiabetico" value="0">--- Selecciona estado ---</option>
				<option value="Si">Si</option>
				<option value="No">No</option>
		</select><br>
		<p id="errorFamD"></p>

famHipertenso: <br>
	<select class="form-control" id="famHipertenso" name="famHipertenso" onchange="fieldSizefamH()" value="{{$consulta->famHipertenso}}">
			<option id="famHipertenso" value="0">--- Selecciona estado ---</option>
				<option value="Si">Si</option>
				<option value="No">No</option>
		</select><br>
		<p id="errorFamH"></p>
	
famCardiaco: <br>
	<select class="form-control" id="famCardiaco" name="famCardiaco" onchange="fieldSizefamC()" value="{{$consulta->famCardiaco}}">
			<option id="famCardiaco" value="0">--- Selecciona estado ---</option>
				<option value="Si">Si</option>
				<option value="No">No</option>
		</select><br>
		<p id="errorFamC"></p>

ceneval: <br>
	<input id="ceneval" name="ceneval" type="text" onblur="fieldSizeCene()" value="{{$consulta->ceneval}}">
	<br>
	<p id="errorCene"></p>

folioInt: <br>
	<input id="folioInt" name="folioInt" type="text" onblur="fieldSizeFoli()" value="{{$consulta->folioInt}}">
	<br>
	<p id="errorFoli"></p>

estadoProc: <br>
	<input id="estadoProc" name="estadoProc" type="text"  onblur="fieldSizeEstado()" value="{{$consulta->estadoProc}}">
	<br>
	<p id="errorEstado"></p>

munProc: <br>
	<input id="munProc" name="munProc" type="text"  onblur="fieldSizeMunP()" value="{{$consulta->munProc}}">
	<br>
	<p id="errorMunP"></p>

escProcedencia: <br>
	<input id="escProcedencia" name="escProcedencia" type="text"  onblur="fieldSizeEscP()" value="{{$consulta->escProcedencia}}">
	<br>
	<p id="errorEscP"></p>

espProcedencia: <br>
	<input id="espProcedencia" name="espProcedencia" type="text"  onblur="fieldSizeEspP()" value="{{$consulta->espProcedencia}}">
	<br>
	<p id="errorEspP"></p>

anoIniProce: <br>
	<input id="anoIniProce" name="anoIniProce" type="text"  onblur="fieldSizeAnoIni()" value="{{$consulta->anoIniProce}}">
	<br>
	<p id="errorAnoIni"></p>

anoFinProce: <br>
	<input id="anoFinProce" name="anoFinProce" type="text"  onblur="fieldSizeAnoFin()" value="{{$consulta->anoFinProce}}">
	<br>
	<p id="errorAnoFin"></p>

promedioProce: <br>
	<input id="promedioProce" name="promedioProce" type="text"  onblur="fieldSizeProm()" value="{{$consulta->promedioProce}}">
	<br>
	<p id="errorProm"></p>

nTutor: <br>
	<input id="nTutor" name="nTutor" type="text" onblur="fieldSizeNtut()" value="{{$consulta->nTutor}}">
	<br>
	<p id="errorNtut"></p>

apTutor: <br>
	<input id="apTutor" name="apTutor" type="text"  onblur="fieldSizeAptut()" value="{{$consulta->apTutor}}">
	<br>
	<p id="errorAptut"></p>

amTutor: <br>
	<input id="amTutor" name="amTutor" type="text"  onblur="fieldSizeAmtut()" value="{{$consulta->amTutor}}">
	<br>
	<p id="errorAmtut"></p>


	<button id="guarda"><a href="indexSubcarreras"></a> guardar</button>
</form>
	</div>
	<script>
	//---------------------------------------input seleccionado y especificando entrada------------------------------------
	const $inputNom = document.querySelector ("#nAspirante");
	const patronNom = /[a-zA-Z]+/;
	$inputNom.addEventListener("keydown", event =>{
			if (patronNom.test(event.key)) {
				document.getElementById('nAspirante').style.border="3px solid #00cc00";
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
		function fieldSizeNom (){
			var tam = document.getElementById("nAspirante").value;
			if (tam.length>=3 ){
				document.getElementById("errorNom").innerHTML = "";
			}else{
				document.getElementById("errorNom").innerHTML = "ERROR, tamaño del texto incorrecto";
				document.getElementById('nAspirante').style.border = "3px solid #ff0000";
			}
		}
	//------------
	const $inputApp = document.querySelector ("#apAspirante");
	const patronApp = /[a-zA-Z]+/;
	$inputApp.addEventListener("keydown", event =>{
			if (patronApp.test(event.key)) {
				document.getElementById('apAspirante').style.border="3px solid #00cc00";
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

		function fieldSizeApp (){
			var tam = document.getElementById("apAspirante").value;
			if (tam.length>=3 ){
				document.getElementById("errorApp").innerHTML = "";
			}else{
				document.getElementById("errorApp").innerHTML = "ERROR, tamaño del texto incorrecto";
				document.getElementById('apAspirante').style.border = "3px solid #ff0000";
			}
		}
	//-----	
	const $inputApm = document.querySelector ("#amAspirante");
	const patronApm = /[a-zA-Z]+/;
	$inputApm.addEventListener("keydown", event =>{
			if (patronApm.test(event.key)) {
				document.getElementById('amAspirante').style.border="3px solid #00cc00";
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

		function fieldSizeApm (){
			var tam = document.getElementById("amAspirante").value;
			if (tam.length>=3 ){
				document.getElementById("errorApm").innerHTML = "";
			}else{
				document.getElementById("errorApm").innerHTML = "ERROR, tamaño del texto incorrecto";
				document.getElementById('amAspirante').style.border = "3px solid #ff0000";
			}
		}
	//----
	const $inputOrigen = document.querySelector ("#paisOrigen");
	const patronOrigen = /[a-zA-Z]+/;
	$inputOrigen.addEventListener("keydown", event =>{
			if (patronOrigen.test(event.key)) {
				document.getElementById('paisOrigen').style.border="3px solid #00cc00";
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

		function fieldSizePais (){
			var tam = document.getElementById("paisOrigen").value;
			if (tam.length>=3 ){
				document.getElementById("errorPais").innerHTML = "";
			}else{
				document.getElementById("errorPais").innerHTML = "ERROR, tamaño del texto incorrecto";
				document.getElementById('paisOrigen').style.border = "3px solid #ff0000";
			}
		}
	
	
	//--------------------------------------error con el select------------------------------
	function fieldSizeCivil (){
			valorCivil = document.getElementById("EstadoCivil").selectedIndex;
			if (valorCivil != 0){
				document.getElementById('EstadoCivil').style.border="3px solid #00cc00";
				document.getElementById("errorCivil").innerHTML = "";
			}else 
			if(valorCivil == 0){
				document.getElementById("errorCivil").innerHTML = "ERROR, campo sin seleccionar";
				document.getElementById('EstadoCivil').style.border = "3px solid #ff0000";
			}		
		}
		function fieldSizeEstado (){
			valorEstado = document.getElementById("estadoProc").selectedIndex;
			if (valorEstado != 0){
				document.getElementById('estadoProc').style.border="3px solid #00cc00";
				document.getElementById("errorEstados").innerHTML = "";
			}else 
			if(valorEstado == 0){
				document.getElementById("errorEstados").innerHTML = "ERROR, campo sin seleccionar";
				document.getElementById('estadoProc').style.border = "3px solid #ff0000";
			}		
		}
		function fieldSizemunProc (){
			valormunP = document.getElementById("munProc").selectedIndex;
			if (valormunP != 0){
				document.getElementById('munProc').style.border="3px solid #00cc00";
				document.getElementById("errormunProc").innerHTML = "";
			}else 
			if(valormunP == 0){
				document.getElementById("errormunProc").innerHTML = "ERROR, campo sin seleccionar";
				document.getElementById('munProc').style.border = "3px solid #ff0000";
			}		
		}
		function fieldSizeEscPro (){
			valorEsc = document.getElementById("escProcedencia").selectedIndex;
			if (valorEsc != 0){
				document.getElementById('escProcedencia').style.border="3px solid #00cc00";
				document.getElementById("errorEscProc").innerHTML = "";
			}else 
			if(valorEsc == 0){
				document.getElementById("errorEscProc").innerHTML = "ERROR, campo sin seleccionar";
				document.getElementById('escProcedencia').style.border = "3px solid #ff0000";
			}		
		}
	//--------
	const $inputCURP = document.querySelector ("#CURP");
	const patronCURP = /[a-zA-Z0-9]+/;
	$inputCURP.addEventListener("keydown", event =>{
			if (patronCURP.test(event.key)) {
				document.getElementById('CURP').style.border="3px solid #00cc00";
				document.getElementById('RFC').style.border="3px solid #00cc00";
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

		function fieldSizeCURP (){
			var tam = document.getElementById("CURP").value;
			if (tam.length==18 ){
				document.getElementById("errorCURP").innerHTML = "";
			}else{
				document.getElementById("errorCURP").innerHTML = "ERROR, tamaño del texto incorrecto";
				document.getElementById('CURP').style.border = "3px solid #ff0000";
			}
		}
	//-------
	function actualizarRFC () {
		let CURP = document.getElementById("CURP").value;
		if (CURP.length<=10){
		document.getElementById("RFC").value = CURP;
							}
			}
	//------
	const $inputPeso = document.querySelector ("#peso");
	const patronPeso = /[0-9]+/;
	$inputPeso.addEventListener("keydown", event =>{
			if (patronPeso.test(event.key)) {
				document.getElementById('peso').style.border="3px solid #00cc00";
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

		function fieldSizePeso (){
			var tam = document.getElementById("peso").value;
			if (tam.length>=2 ){
				document.getElementById("errorPeso").innerHTML = "";
			}else{
				document.getElementById("errorPeso").innerHTML = "ERROR, tamaño del texto incorrecto";
				document.getElementById('peso').style.border = "3px solid #ff0000";
			}
		}
//-----------
	const $inputEstatura = document.querySelector ("#estatura");
	const patronEstatura = /[0-9]+/;
	$inputEstatura.addEventListener("keydown", event =>{
			if (patronEstatura.test(event.key)) {
				document.getElementById('estatura').style.border="3px solid #00cc00";
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

		function fieldSizeEsta (){
			var tam = document.getElementById("estatura").value;
			if (tam.length>=3 ){
				document.getElementById("errorEsta").innerHTML = "";
			}else{
				document.getElementById("errorEsta").innerHTML = "ERROR, tamaño del texto incorrecto";
				document.getElementById('estatura').style.border = "3px solid #ff0000";
			}
		}
		//----------------
	const $inputCeneval = document.querySelector ("#ceneval");
	const patronCeneval = /[a-zA-Z]+/;
	$inputCeneval.addEventListener("keydown", event =>{
			if (patronCeneval.test(event.key)) {
				document.getElementById('ceneval').style.border="3px solid #00cc00";
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

		function fieldSizeCene (){
			var tam = document.getElementById("ceneval").value;
			if (tam.length>=3 ){
				document.getElementById("errorCene").innerHTML = "";
			}else{
				document.getElementById("errorCene").innerHTML = "ERROR, tamaño del texto incorrecto";
				document.getElementById('ceneval').style.border = "3px solid #ff0000";
			}
		}
//-------------
	const $inputFolio = document.querySelector ("#folioInt");
	const patronFolio = /[0-9]+/;
	$inputFolio.addEventListener("keydown", event =>{
			if (patronFolio.test(event.key)) {
				document.getElementById('folioInt').style.border="3px solid #00cc00";
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

		function fieldSizeFoli (){
			var tam = document.getElementById("folioInt").value;
			if (tam.length>=3 ){
				document.getElementById("errorFoli").innerHTML = "";
			}else{
				document.getElementById("errorFoli").innerHTML = "ERROR, tamaño del texto incorrecto";
				document.getElementById('folioInt').style.border = "3px solid #ff0000";
			}
		}
//-----------
	const $inputProm = document.querySelector ("#promedioProce");
	const patronProm = /[0-9]+/;
	$inputProm.addEventListener("keydown", event =>{
			if (patronProm.test(event.key)) {
				document.getElementById('promedioProce').style.border="3px solid #00cc00";
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

		function fieldSizeProm (){
			var tam = document.getElementById("promedioProce").value;
			if (tam.length>=3 ){
				document.getElementById("errorProm").innerHTML = "";
			}else{
				document.getElementById("errorProm").innerHTML = "ERROR, tamaño del texto incorrecto";
				document.getElementById('promedioProce').style.border = "3px solid #ff0000";
			}
		}
//---
const $inputnTut = document.querySelector ("#nTutor");
	const patronnTut = /[a-zA-Z]+/;
	$inputnTut.addEventListener("keydown", event =>{
			if (patronnTut.test(event.key)) {
				document.getElementById('nTutor').style.border="3px solid #00cc00";
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

		function fieldSizeNtut (){
			var tam = document.getElementById("nTutor").value;
			if (tam.length>=3 ){
				document.getElementById("errorNtut").innerHTML = "";
			}else{
				document.getElementById("errorNtut").innerHTML = "ERROR, tamaño del texto incorrecto";
				document.getElementById('nTutor').style.border = "3px solid #ff0000";
			}
		}
//---
const $inputapTut = document.querySelector ("#apTutor");
	const patronapTut = /[a-zA-Z]+/;
	$inputapTut.addEventListener("keydown", event =>{
			if (patronapTut.test(event.key)) {
				document.getElementById('apTutor').style.border="3px solid #00cc00";
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

		function fieldSizeAptut (){
			var tam = document.getElementById("apTutor").value;
			if (tam.length>=3 ){
				document.getElementById("errorAptut").innerHTML = "";
			}else{
				document.getElementById("errorAptut").innerHTML = "ERROR, tamaño del texto incorrecto";
				document.getElementById('apTutor').style.border = "3px solid #ff0000";
			}
		}
//--------
	const $inputamTut = document.querySelector ("#amTutor");
	const patronamTut = /[a-zA-Z]+/;
	$inputamTut.addEventListener("keydown", event =>{
			if (patronamTut.test(event.key)) {
				document.getElementById('amTutor').style.border="3px solid #00cc00";
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

		function fieldSizeAmtut (){
			var tam = document.getElementById("amTutor").value;
			if (tam.length>=3 ){
				document.getElementById("errorAmtut").innerHTML = "";
			}else{
				document.getElementById("errorAmtut").innerHTML = "ERROR, tamaño del texto incorrecto";
				document.getElementById('amTutor').style.border = "3px solid #ff0000";
			}
		}
//------

//-----------
function fieldSizefamD (){
			valorFamD = document.getElementById("famDiabetico").selectedIndex;
			if (valorFamD != 0){
				document.getElementById('famDiabetico').style.border="3px solid #00cc00";
				document.getElementById("errorFamD").innerHTML = "";
			}else 
			if(valorFamD == 0){
				document.getElementById("errorFamD").innerHTML = "ERROR, campo sin seleccionar";
				document.getElementById('famDiabetico').style.border = "3px solid #ff0000";
			}		
		}

function fieldSizefamH (){
			valorFamH = document.getElementById("famHipertenso").selectedIndex;
			if (valorFamH != 0){
				document.getElementById('famHipertenso').style.border="3px solid #00cc00";
				document.getElementById("errorFamH").innerHTML = "";
			}else 
			if(valorFamH == 0){
				document.getElementById("errorFamH").innerHTML = "ERROR, campo sin seleccionar";
				document.getElementById('famHipertenso').style.border = "3px solid #ff0000";
			}		
		}
function fieldSizefamC (){
			valorfamC = document.getElementById("famCardiaco").selectedIndex;
			if (valorfamC != 0){
				document.getElementById('famCardiaco').style.border="3px solid #00cc00";
				document.getElementById("errorFamC").innerHTML = "";
			}else 
			if(valorfamC == 0){
				document.getElementById("errorFamC").innerHTML = "ERROR, campo sin seleccionar";
				document.getElementById('famCardiaco').style.border = "3px solid #ff0000";
			}		
		}



	//---------------------------------------validacion--------------------------------------------
	function validacion (){
//--------------------------------variables
	valornAspirante = document.getElementById("nAspirante").value;
	valorapAspirante = document.getElementById("apAspirante").value;
	valoramAspirante = document.getElementById("amAspirante").value;
	valorOrigen = document.getElementById("paisOrigen").value;
	valorCivil = document.getElementById("EstadoCivil").selectedIndex;
	valorCURP = document.getElementById("CURP").value;
	valorPeso = document.getElementById("peso").value;
	valorEstatura = document.getElementById("estatura").value;
	valorfamD = document.getElementById("famDiabetico").selectedIndex;
	valorfamH = document.getElementById("famHipertenso").selectedIndex;
	valorfamC = document.getElementById("famCardiaco").selectedIndex;
	valorCene = document.getElementById("ceneval").value;
	valorFoli = document.getElementById("folioInt").value;
	valorEstado = document.getElementById("estadoProc").value;
	valorMuni = document.getElementById("munProc").value;
	valorEscu = document.getElementById("escProcedencia").value;
	valorProm = document.getElementById("promedioProce").value;
	valorNtut = document.getElementById("nTutor").value;
	valorapTut = document.getElementById("apTutor").value;
	valoramTut = document.getElementById("amTutor").value;
//------------------radio
	opciones = document.getElementsByName("sexo");
	var seleccionado = false;
	for (var i=0;i<opciones.length; i++){
		if(opciones[i].checked){
			seleccionado = true;
			break;
		}
	}
	opcionesSangre = document.getElementsByName("tSangre");
	var seleccionadoSangre = false;
	for (var i=0;i<opcionesSangre.length; i++){
		if(opcionesSangre[i].checked){
			seleccionadoSangre = true;
			break;
		}
	}
//---------------------------validando campos
	if (valornAspirante == null || valornAspirante.length == 0 || /^\s+$/.test(valornAspirante)){
		document.getElementById("errorNom").innerHTML = "ERROR, campo vacio";
		document.getElementById('nAspirante').style.border = "3px solid #ff0000";
		return false;
	}else
	if (valorapAspirante == null || valorapAspirante.length == 0 || /^\s+$/.test(valorapAspirante)){
		document.getElementById("errorApp").innerHTML = "ERROR, campo vacio";
		document.getElementById('apAspirante').style.border = "3px solid #ff0000";
		return false;
	}else
	if (valoramAspirante == null || valoramAspirante.length == 0 || /^\s+$/.test(valoramAspirante)){
		document.getElementById("errorApm").innerHTML = "ERROR, campo vacio";
		document.getElementById('amAspirante').style.border = "3px solid #ff0000";
		return false;
	}else 
	if (valorOrigen == null || valorOrigen.length == 0 || /^\s+$/.test(valorOrigen)){
		document.getElementById("errorPais").innerHTML = "ERROR, campo vacio";
		document.getElementById('paisOrigen').style.border = "3px solid #ff0000";
		return false;
	}else
	if(valorCivil == null || valorCivil == 0){
		document.getElementById("errorCivil").innerHTML = "ERROR, campo sin seleccionar";
		document.getElementById('EstadoCivil').style.border = "3px solid #ff0000";
		
		return false;
	}else 
	if (valorCURP == null || valorCURP.length == 0 || /^\s+$/.test(valorCURP)){
		document.getElementById("errorCURP").innerHTML = "ERROR, campo vacio";
		document.getElementById('CURP').style.border = "3px solid #ff0000";
		return false;
	}else
	if(!seleccionado){
		return false;
		document.getElementById("errorSexo").innerHTML = "ERROR, campo vacio";
	}else 
	if (valorPeso == null || valorPeso.length == 0 || /^\s+$/.test(valorPeso)){
		document.getElementById("errorCURP").innerHTML = "ERROR, campo vacio";
		document.getElementById('peso').style.border = "3px solid #ff0000";
		return false;
	}else
	if (valorEstatura == null || valorEstatura.length == 0 || /^\s+$/.test(valorEstatura)){
		document.getElementById("errorEsta").innerHTML = "ERROR, campo vacio";
		document.getElementById('estatura').style.border = "3px solid #ff0000";
		return false;
	}else
	if(!seleccionadoSangre){
		return false;
		document.getElementById("errorSangre").innerHTML = "ERROR, campo vacio";
	}else
	if(valorfamD == null || valorfamD == 0){
		document.getElementById("errorFamD").innerHTML = "ERROR, campo sin seleccionar";
		document.getElementById('famDiabetico').style.border = "3px solid #ff0000";
		
		return false;
	}else
	if(valorfamH == null || valorfamH == 0){
		document.getElementById("errorFamH").innerHTML = "ERROR, campo sin seleccionar";
		document.getElementById('famHipertenso').style.border = "3px solid #ff0000";
		
		return false;
	}else
	if(valorfamC == null || valorfamC == 0){
		document.getElementById("errorFamC").innerHTML = "ERROR, campo sin seleccionar";
		document.getElementById('famCardiaco').style.border = "3px solid #ff0000";
		
		return false;
	}else
	if (valorCene == null || valorCene.length == 0 || /^\s+$/.test(valorCene)){
		document.getElementById("errorCene").innerHTML = "ERROR, campo vacio";
		document.getElementById('ceneval').style.border = "3px solid #ff0000";
		return false;
	}else
	if (valorFoli == null || valorFoli.length == 0 || /^\s+$/.test(valorFoli)){
		document.getElementById("errorFoli").innerHTML = "ERROR, campo vacio";
		document.getElementById('folioInt').style.border = "3px solid #ff0000";
		return false;
	}else
	if(valorEstado == null || valorEstado == 0){
		document.getElementById("errorEstados").innerHTML = "ERROR, campo sin seleccionar";
		document.getElementById('estadoProc').style.border = "3px solid #ff0000";
		
		return false;
	}else
	if(valorMuni == null || valorMuni == 0){
		document.getElementById("errormunProc").innerHTML = "ERROR, campo sin seleccionar";
		document.getElementById('munProc').style.border = "3px solid #ff0000";
		
		return false;
	}else
	if(valorEscu == null || valorEscu == 0){
		document.getElementById("errorEscProc").innerHTML = "ERROR, campo sin seleccionar";
		document.getElementById('escProcedencia').style.border = "3px solid #ff0000";
		
		return false;
	}else
	if (valorProm == null || valorProm.length == 0 || /^\s+$/.test(valorProm)){
		document.getElementById("errorProm").innerHTML = "ERROR, campo vacio";
		document.getElementById('promedioProce').style.border = "3px solid #ff0000";
		return false;
	}else
	if (valorNtut == null || valorNtut.length == 0 || /^\s+$/.test(valorNtut)){
		document.getElementById("errorNtut").innerHTML = "ERROR, campo vacio";
		document.getElementById('nTutor').style.border = "3px solid #ff0000";
		return false;
	}else
	if (valorapTut == null || valorapTut.length == 0 || /^\s+$/.test(valorapTut)){
		document.getElementById("errorAptut").innerHTML = "ERROR, campo vacio";
		document.getElementById('apTutor').style.border = "3px solid #ff0000";
		return false;
	}else
	if (valoramTut == null || valoramTut.length == 0 || /^\s+$/.test(valoramTut)){
		document.getElementById("errorAmtut").innerHTML = "ERROR, campo vacio";
		document.getElementById('amTutor').style.border = "3px solid #ff0000";
		return false;
	}else
	{
		return true;
	}
}
	</script>
</body>
</html>
