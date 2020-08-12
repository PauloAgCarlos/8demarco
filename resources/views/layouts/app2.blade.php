<!DOCTYPE html>
<html>
<head>
	<title>ESCOLA 8 DE MARÇO</title>

	<!-- <link rel="stylesheet" type="text/css" href="css/materialize.css"> -->
	<link rel="stylesheet" type="text/css" href="{{ asset('folhasCss/sitlo_certificado.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('folhasCss/stilo_administrativo.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/materialize.css') }}">
<!-- 	<link rel="stylesheet" type="text/css" href="folhasCss/caderneta.css">
	<link rel="stylesheet" type="text/css" href="folhasCss/sitlo_certificado.css">
	<link rel="stylesheet" type="text/css" href="folhasCss/stilo_administrativo.css">
	<link rel="stylesheet" type="text/css" href="folhasCss/stilo_index.css">
	<link rel="stylesheet" type="text/css" href="folhasCss/stilo_pautas.css">
	<link rel="stylesheet" type="text/css" href="folhasCss/stilo_termo.css">
	<link rel="stylesheet" type="text/css" href="folhasCss/style.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="folhasCss/style_index.css"> -->

	<script src="js/jquery-3.5.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.js"></script>
<script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.js"></script>
</head>
<body class="container #212121 grey darken-4">
	 <!-- @include('layouts.nav') -->
	 @yield('conteudo')
	 <!-- @include('layouts.rodape') -->
</body>
</html>