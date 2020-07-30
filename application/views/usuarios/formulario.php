

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>



<form  method="post" action="<?php echo base_url('usuarios/guardar') ?>">

<div class="container" id='login'>
            <div class="panel panel-primary"> 
            <div class="panel-heading text-center"> 
            <h1>INGRESAR DATOS DE USUARIO</h1>
            </div></div>
    <div class="panel-footer">

	<p>
		<label>Login</label>
		<input type = "text" name  ="usua_login" class="form-control" placeholder="usua_login">
	</p>
	<p>
		<label>Password</label>
		<input type = "text" name  ="usua_password" class="form-control"  placeholder="password">
	</p>
	<p>
		<label>Codigo</label>
		<input type = "text" name  ="usua_codigo" class="form-control"  placeholder="Codigo">
	</p>
	<p>
		<label>Nombres</label>
		<input type = "text" name  ="usua_nombres" class="form-control"  placeholder="nombres">
	</p>
	<p>
		<label>Apellidos</label>
		<input type = "text" name  ="apellidos" class="form-control"  placeholder="apellidos">
	</p>
	<p>
		<label>Direccion</label>
		<input type = "text" name  ="usua_direccion" class="form-control"  placeholder="direccion">
	</p>
	<p>
		<label>Correo</label>
		<input type = "text" name  ="usua_email" class="form-control"  placeholder="email">
	</p>
	<p>
		<label>Telefono</label>
		<input type = "text" name  ="usua_telefono" class="form-control"  placeholder="Telefono">
	</p>
	<p>
		<label>Esadmin</label>
		<input type = "text" name  ="usua_esadmin" class="form-control"  placeholder="Esadmin">
	</p>
	<p>
		<input type = "submit" value="Guardar" class="btn btn-danger">
	</p>
	
</form>

</body>
</html>
