<?php
	
    include("menu.php");
	
?>
<div>
<h1 class="display-4" class="h1"  class="text-secondary">CATEGORIA:</h1><div>
<div>
<table class="table table-bordered">
	<thead class="thead-dark">
		<tr>
			<th scope="row">ID</th>
			<th >NOMBRES</th>
					
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
			<th scope="row"><?php echo $reg->cate_id; ?></th>
			<th scope="row"><?php echo $reg->cate_nombre; ?></th>
			<td scope="row">  <a href="eliminar<?php echo $reg->usua_id ?>"><i class="far fa-edit"></i> Editar</a></td>
			<td scope="row"> <a href="eliminar<?php echo $reg->usua_id ?>"><i class="fas fa-eraser"></i> Borrar</a></td>
           
		</tr>
		<?php endforeach ?> 
	</tbody>
</table></div>
<div class="page-header">
<p>
	<a href="usuarios/formulario_categoria">	<button type="button" class="btn btn-info">Subir Categoria</button></a>

	
	  
  </div>
