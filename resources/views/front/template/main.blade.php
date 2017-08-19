<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<meta charset="UTF-8">
	<meta name="keywords" content="cursos programacion informatica php desarrollo diseño java html5 tutoriales">
	<meta name="description" content="Tutoriales y cursos de desarrollo y diseño de aplicaciones web moviles y escritorio, aprenderás todo lo relacionado con programacion ">
	<meta name="author" content="Dev3Apss">
	<meta name="copyright" content="dev3Apps">
	<meta name="robots" content="index, follow">

	<meta http-equiv="X-UA-COMPATIBLE" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="shortcut icon" href="{{asset('favicon.png')}}">
	<title>
		@yield('title', 'Dev3Apps') | Tutoriales y Cursos de Desarrollo Web y Multiplaformas
	</title>

	<link rel="stylesheet" href="{{asset('css/app.css')}}">


	<link rel="stylesheet" href="{{asset('plugins/chosen/chosen.css')}}">
	<link rel="stylesheet" href="{{asset('css/trumbowyg.css')}}">

	<script type="text/javascript">
		navegador=navigator.userAgent; //busco el "userAgent" del usuario.

		//lista de palabras del "userAgent" en los móviles
		moviles=["iPhone","iPod","iPad","Android"];

		detector=0; //Variable que detectará si se usa un móvil

		for (i in moviles) { //comprobar en la lista ...
			//si el método "indexOf" no devuelve -1, indica que la palabra está en el "userAgent"
			compruebo=navegador.indexOf(moviles[i]);
			if (compruebo>-1) {
				detector=1; //Si es un móvil, cambio el valor del detector
			}
		}

		if (detector==1) { //si es un móvil redirecciono la página.
			document.write('<link rel="stylesheet" href="" type="text/css">');
			alert("soy un movil");
		}else{
			alert("soy una pantalla de portatil");
			document.write('<link rel="stylesheet" href="{{asset('css/pcpequeña.css')}}" type="text/css" media="(max-width:1199px) and (min-width:255px)">');
			document.write('<link rel="stylesheet" href="{{asset('css/pc.css')}}" type="text/css" media="screen and (max-width:3600px) and (min-width:1200px)">');
		}

	</script>
</head>
	
<body>	
	    
   @include('front.template.partials.cookies')
<header>
	@include('front.template.partials.header')	
</header>

<div class="container">
				@yield('content')

</div>

	<footer>
		@include('admin.template.partials.footer')
	</footer>

	<script src="{{asset('js/app.js')}}"></script>
	<script src="{{asset('js/trumbowyg.js')}}"></script>


</body>



</div>

</html>