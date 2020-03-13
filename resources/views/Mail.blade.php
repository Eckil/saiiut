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
<body oncopy="return false" onpaste="return false" bgcolor="#000000" text="#636b6f">
<center>

<h1>Laravel</h1> 
	<ul>
        <li>{{$nombre}}</li>
        <li>{{$cuerpo}}</li>
        <li><img srcset="$imagen">beautiful</li>
        
    </ul>
</center>
</body>
</html>
