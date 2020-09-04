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

<!-- para jquery-->
  <script src="jquery-1.3.2.min.js" type="text/javascript"></script>
    
</head>

<body>


<nav class="navbar navbar-inverse" role="navigation">
<ul class="nav navbar-nav navbar-left">
    	  <li><a href="usuarios">Usuarios</a></li></div>
		  <li><a href="ejemplar">Ejemplar</a></li>
    <li><a href="categoria">Categoria</a></li>
    <li><a href="historial">Historial</a></li>
	 <li><a href="favorito">Favoritos</a></li>
    <li><a href="peticion">Peticion</a></li>
    <li><a href="pestramo">Prestamo</a></li>
	<li><a href="<?php echo base_url(); ?>">Inicio</a></li>
	<li><a href="<?php echo base_url('Welcome/confidencial'); ?>">Menu es confidencial</a></li>
	<li><a href="<?php echo base_url('Welcome/confidencial2'); ?>">MENU FUERA dos es confidencial</a></li>
	<li><a href="<?php echo base_url('Login'); ?>">Login</a></li>
	<li><a href="<?php echo base_url('Login/salir'); ?>">Logout</a></li>
	
</ul>
</nav>


</body>
</html>

