<?php
	
    include("menu.php");
	
?>
<div>
<h1 class="display-4" class="h1"  class="text-secondary">USUARIOS:</h1><div>
<div>
<table class="table table-bordered">
	<thead class="thead-dark">
		<tr>
			<th scope="row">ID</th>
			<th >LOGIN</th>
			<th >PASSWORD</th>
			<th >CODIGO</th>
			<th >NOMBRES</th>
			<th >APELIIDOS</th>
			<th >DIREECION</th>
			<th >CORREO</th>
			<th >TELEFONO</th>
			<th >ESADMIN</th>
			
			<th  colspan='2'>OPCIONES<td></td></th>
		</tr>
	</thead>
	<tbody>
		<!-- Realiza bucle solo del array los dos puntos significa que empeiza llaves y terminamos con 
		endfor que seria cerrar llaves para while sera endwhile solo toma el valor de lo que estas utilizando 
		EJEMPLO
		if():
		endif;
		-->
		
		
		<?php foreach($registros as $reg): ?> 
		<tr>
			<th scope="row"><?php echo $reg->usua_id; ?></th>
			<th scope="row"><?php echo $reg->usua_login; ?></th>
			<th scope="row"><?php echo $reg->usua_password; ?></th>
			<th scope="row"><?php echo $reg->usua_codigo;?></th>
			<th scope="row"><?php echo $reg->usua_nombres; ?></th>
			<th scope="row"><?php echo $reg->usua_apellidos; ?></th>
			<th scope="row"><?php echo $reg->usua_direccion; ?></th>
			<th scope="row"><?php echo $reg->usua_email; ?></th>
			<th scope="row"><?php echo $reg->usua_telefono; ?></th>
			<th scope="row"><?php echo $reg->usua_esadmin; ?></th>
			<td scope="row">  <a href="eliminar<?php echo $reg->usua_id ?>"><i class="far fa-edit"></i> Editar</a></td>
			<td scope="row"> <a href="eliminar<?php echo $reg->usua_id ?>"><i class="fas fa-eraser"></i> Borrar</a></td>
           
		</tr>
		<?php endforeach ?> 
	</tbody>
</table></div>
<div class="page-header">
<p>
	<a href="usuarios/formulario">	<button type="button" class="btn btn-info">Subir Usuarios</button></a>

	
	  
  </div>
