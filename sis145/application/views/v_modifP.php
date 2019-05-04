<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Actualizar</title>
</head>
<body>
<?php 
	
	foreach ($datos as $d) {
		$d->nro_dip;
		$d->nombre;
		$d->paterno;
		$d->materno;
		$d->id;
	}
?>
	<form action="http://localhost/sis145/index.php/persona/actualizar" method="POST">
	<input type="text" hidden="" value="<?php echo $d->id ?>" name="id">
	<label>Nro_dip</label>
	<br>
	<input type="text" name="nro_dip" value="<?php echo $d->nro_dip ?>">
	<br>
	<label>Nombre</label>
	<br>
	<input type="text" name="nombre" value="<?php echo $d->nombre?>">
	<br>
	<label>Paterno</label>
	<br>
	<input type="text" name="paterno" value="<?php echo $d->paterno?>">
	<br>
	<label>Materno</label>
	<br>
	<input type="text" name="materno" value="<?php echo $d->materno?>">
	<br>
	<input type="submit" value="actualizar">
</form>
	
</body>
</html>
