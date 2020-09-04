<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
 <!-- Para bootstrap 4.1 -->
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
   <!-- Para bootstrap 4.1 -->
   <script src="js/jquery-1.11.2.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/validacion.js"></script>

</head>
<body>
<div>
<nav class="navbar navbar-default" role="navigation">

<nav class="navbar navbar-inverse" role="navigation">
<ul class="nav navbar-nav navbar-left">
    <li><a href="usuarios.php">Usuarios</a></li></div>
    <li><a href="historial.php">Historial</a></li>
	<li><a href="ejemplar.php">Ejemplar</a></li>
    <li><a href="categoria.php">Categoria</a></li>
    <li><a href="favorito.php">Favoritos</a></li>
    <li><a href="peticion.php">Peticion</a></li>
    <li><a href="pestramo.php">Prestamo</a></li>
	<li><a href="<?php echo base_url(); ?>">Inicio</a></li>
	<li><a href="<?php echo base_url('Welcome/confidencial'); ?>">confidencial menu dentro de usuarios</a></li>
	<li><a href="<?php echo base_url('Login'); ?>">Mi cuenta</a></li>
	<li><a href="<?php echo base_url('Login/salir'); ?>">Salir de tu cuenta</a></li>
	</lu>
</nav>
</div>


</body>
</html>
