<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Persona-Pais</title>
</head>
<body>
	<br>
<center>
	<form action="persona_pais/guardar" method="POST">
		<label for="id_persona">Nombre Persona</label>
		<select name="id_persona">
		<?php 
			foreach ($datos1 as $d1) {?>
				<option value="<?php echo $d1->id; ?>"><?php echo $d1->nombre; ?></option>	
			<?php } ?>
		</select><br><br>
		<label for="id_pais">Pais</label>
		<select name="id_pais">
		<?php 
			foreach ($datos2 as $d2) {?>
				<option value="<?php echo $d2->id; ?>"><?php echo $d2->nombre_pais; ?></option>	
			<?php } ?>
		</select><br><br>
		<label for="fecha_registro">Fecha Registro</label><br><br>
		<input type="date" name="fecha_registro"><br><br>
		<label for="estado">Estado</label><br><br>
		<input type="number" name="estado" min="0" max="1"><br><br>
		<input type="submit" value="Guardar">
	</form>
	<br>
	<table border="1">
	<tr>
		<th>Nombre</th>
		<th>Pais</th>
		<th>Fecha Registro</th>
		<th colspan="2">Opciones</th>
	</tr>
	<?php 
		foreach ($datos as $d) {
			echo "<tr>
					<td>".$d->nombre."</td>
					<td>".$d->nombre_pais."</td>
					<td>".$d->fecha_registro."</td>
					<td><a href='persona_pais/modificar/{$d->id}'>Modificar</a></td>
					<td><a href='persona_pais/eliminar/{$d->id}'>Eliminar</a></td>
				  </tr>";
		}
	
	 ?>
	</table>
</center>
</body>
</html>