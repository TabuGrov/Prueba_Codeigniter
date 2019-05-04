<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mostrar datos</title>
</head>
<body>
	<center>
		<h1>Tabla Paises</h1>
	<form action="paises/guardar" method="POST">
		<label>Nombre</label>
		<br>
		<input type="text" name="nombre_pais">
		<br>
		<label>Moneda</label>
		<br>
		<input type="text" name="moneda">
		<br>
		<label>Idioma</label>
		<br>
		<input type="text" name="idioma">
		<br>
		<label>Estado</label>
		<br>
		<input type="text" name="estado">
		<br><br>
		<input type="submit" value="Agregar">
	</form>
	<br>
		<table border="1">
		<tr>
			<th>Nombre</th>
			<th>Moneda</th>
			<th>Idioma</th>
			<th>Estado</th>
			<th colspan="2">Opciones</th>
		</tr>
		<?php 
			foreach ($datos as $d) {
				echo "<tr>
						<td align='center'>".$d->nombre_pais."</td>
						<td>".$d->moneda."</td>
						<td>".$d->idioma."</td>
						<td>".$d->estado."</td>
						<td><a href='paises/modificar/{$d->id}'>Modificar</a></td>
						<td><a href='paises/eliminar/{$d->id}'>Eliminar</a></td>
					  </tr>";
			}

		 ?>
		</table>
	</center>
</body>
</html>