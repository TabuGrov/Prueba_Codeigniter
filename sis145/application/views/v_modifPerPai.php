<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Actualizar</title>
</head>
<body>
	<?php 
		foreach ($datos as $d)
		{
			$d->id_persona;
			$d->id_pais;
			$d->fecha_registro;
			$d->id;
		}
	 ?>
<form action="http://localhost/sis145/index.php/persona_pais/Actualizar" method="POST">
		<input type="text" hidden="" value="<?php echo $d->id ?>" name="id">
		<label for="id_persona">Nombre Persona</label>
		<!-- SELECCION NOMBRE DE LA TABLA PERSONA -->
		<select name="id_persona">
		<?php 
			foreach ($datos1 as $d1) {?>
				<option <?php if ($d->id_persona==$d1->id) echo'selected="selected"';?> 
				value="<?php  echo $d1->id;?>" ><?php echo $d1->nombre;; ?></option>	
			<?php } ?>
		</select><br><br>
		<!-- SELECCION Pais DE LA TABLA PAIS -->
		<label for="id_pais">Pais</label>
		<select name="id_pais">
		<?php 
			foreach ($datos2 as $d2) {?>
				<option <?php if ($d->id_pais==$d2->id) echo'selected="selected"';?> 
				value="<?php  echo $d2->id;?>" ><?php echo $d2->nombre_pais; ?></option>	
			<?php } ?>
		</select><br><br>
		<label for="fecha_registro">Fecha Registro</label><br><br>
		<input type="date" name="fecha_registro" value="<?php echo $d->fecha_registro; ?>"><br><br>
		<label for="estado">Estado</label><br><br>
		<input type="number" name="estado" min="0" max="1" value="<?php echo $d->estado; ?>" ><br><br>
		<input type="submit" value="Guardar">	
</body>
</html>
