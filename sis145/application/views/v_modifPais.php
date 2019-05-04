<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Actualizar</title>
</head>
<body>
<?php 
	
	foreach ($datos as $d) {
		$d->nombre_pais;
		$d->moneda;
		$d->idioma;
		$d->estado;
		$d->id;
	}
?>
	<form action="http://localhost/sis145/index.php/paises/actualizar" method="POST">
	<input type="text" hidden="" value="<?php echo $d->id ?>" name="id">
	<label>Nombre</label>
	<br>
	<input type="text" name="nombre_pais" value="<?php echo $d->nombre_pais ?>">
	<br>
	<label>Moneda</label>
	<br>
	<input type="text" name="moneda" value="<?php echo $d->moneda?>">
	<br>
	<label>Idioma</label>
	<br>
	<input type="text" name="idioma" value="<?php echo $d->idioma?>">
	<br>
	<label>Estado</label>
	<br>
	<input type="text" name="estado" value="<?php echo $d->estado?>">
	<br>
	<input type="submit" value="actualizar">
</form>
	
</body>
</html>
