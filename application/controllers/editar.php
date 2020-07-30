<?php

$usua_id = $_GET['usua_id'];

$db = new mysqli('localhost', 'root', '', 'biblioteca');
if ($db->connect_errno) {
    die("Error al conectar : " . $db->connect_error);
}

$sql = "SELECT * FROM persona WHERE id='{$usua_id}'";
$result = $db->query($sql);
if (!$result) {
    die("Error al consultar: " . $db->error);
}

if ($result->num_rows == 0) {
    echo "No hay registros";
} else {

    $reg = $result->fetch_assoc();
?>
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


<?php
}
?>
