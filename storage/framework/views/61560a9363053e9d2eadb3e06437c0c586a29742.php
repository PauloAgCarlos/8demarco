<!DOCTYPE html>
<html>
<head>
	<title>ESCOLA 8 DE MARÇO</title>

	<!-- <link rel="stylesheet" type="text/css" href="css/materialize.css"> -->
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('folhasCss/sitlo_certificado.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('folhasCss/stilo_administrativo.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/materialize.css')); ?>">
<!-- 	<link rel="stylesheet" type="text/css" href="folhasCss/caderneta.css">
	<link rel="stylesheet" type="text/css" href="folhasCss/sitlo_certificado.css">
	<link rel="stylesheet" type="text/css" href="folhasCss/stilo_administrativo.css">
	<link rel="stylesheet" type="text/css" href="folhasCss/stilo_index.css">
	<link rel="stylesheet" type="text/css" href="folhasCss/stilo_pautas.css">
	<link rel="stylesheet" type="text/css" href="folhasCss/stilo_termo.css">
	<link rel="stylesheet" type="text/css" href="folhasCss/style.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="folhasCss/style_index.css"> -->
</head>
<body class="container #212121 grey darken-4">
	 <!-- <?php echo $__env->make('layouts.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> -->
	 <?php echo $__env->yieldContent('conteudo'); ?>
	 <!-- <?php echo $__env->make('layouts.rodape', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> -->
</body>
</html><?php /**PATH C:\laragon\www\8demarco\resources\views/layouts/app2.blade.php ENDPATH**/ ?>