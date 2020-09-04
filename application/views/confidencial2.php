<table>
	<thead>
		<tr>
			<th>id</th>
			<th>nombre</th>
			<th>usuario</th>
			<th>password</th>

		</tr>
	</thead>
	<tbody>
		<?php foreach($user as $row): ?>
		<tr>
			<td><?php echo $row->usua_id; ?></td>
			<td><?php echo $row->usua_nombre; ?></td>
			<td><?php echo $row->usua_password; ?></td>
		</tr>
		<?php endforeach; ?>
	</tbody>

</table>
