<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
		@yield('title','Default') | Panel de Administración
	</title>
		<link rel="stylesheet" href="{{asset('css/app.css')}}">
		<link rel="stylesheet" href="{{asset('plugins/chosen/chosen.css')}}">
		<link rel="stylesheet" href="{{asset('css/trumbowyg.css')}}">

</head>

<body>	

	<div class="container-fluid">
	@include('admin.template.partials.nav')

	<section>
		@include('admin.template.partials.content')
	</section>

	<footer>
		@include('admin.template.partials.footer')
	</footer>

   </div>
	<script src="{{asset('js/app.js')}}"></script>
	<script src="{{asset('js/trumbowyg.js')}}"></script>

	@yield('js')

</body>
</html>