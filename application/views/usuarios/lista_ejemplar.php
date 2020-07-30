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
			<th >TITULO</th>
			<th >EDITORIAL</th>
			<th >PAGINAS</th>
			<th >ISBN</th>
			<th >IDIOMA</th>
			<th >PORTADA</th>
			<th >DIGITAL</th>
			<th >AUDIO</th>
			<th >RESUMEN</th>
			<th >TIPO_ID</th>
			<th >CATE_ID</th>
			<th >VALORACION</th>
			<th >VALORACION</th>
			<th >ANIO</th>
			<th >PRESTAMOS</th>
			
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
	<a href="usuarios/formulario_ejemplar">	<button type="button" class="btn btn-info">Subir Usuarios</button></a>

	
	  
  </div>
