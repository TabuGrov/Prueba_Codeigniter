<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mostrar datos</title>
</head>
<body>
	<center>
		<h1>Tabla Personas</h1>
	<form action="persona/guardar" method="POST">
		<label>Nro_dip</label>
		<br>
		<input type="text" name="nro_dip">
		<br>
		<label>Nombre</label>
		<br>
		<input type="text" name="nombre">
		<br>
		<label>Paterno</label>
		<br>
		<input type="text" name="paterno">
		<br>
		<label>Materno</label>
		<br>
		<input type="text" name="materno">
		<br><br>
		<input type="submit" value="Agregar">
	</form>
	<br>
		<table border="1">
		<tr>
			<th>Cedula de Identidad</th>
			<th>Nombre</th>
			<th>Paterno</th>
			<th>Materno</th>
			<th colspan="2">Opciones</th>
		</tr>
		<?php 
			foreach ($datos as $d) {
				echo "<tr>
						<td align='center'>".$d->nro_dip."</td>
						<td>".$d->nombre."</td>
						<td>".$d->paterno."</td>
						<td>".$d->materno."</td>
						<td><a href='persona/modificar/{$d->id}'>Modificar</a></td>
						<td><a href='persona/eliminar/{$d->id}'>Eliminar</a></td>
					  </tr>";
			}

		 ?>
		</table>
	</center>
</body>
</html>