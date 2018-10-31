<!DOCTYPE html>
<html>
	<head>
		<title>Birlos Internacionales</title>
	<link rel="stylesheet" type="text/css" href="../css/inicio1.css">
	</head>
	<body>
			<a class="botonI" href="index.php">Inicio</a>
		<h1>Birlos Internacionales</h1>
			<form action="guardaras.php" method="POST" class="form-regis">

				<h2 class="titulo">Alta De Equivalencias</h2>

		<div class="contenedor-input">
			
				<input type="text" name="ID_EQUI"  placeholder="ID_EQUI"class="input-48" required>
				<input type="text" name="CLAVEH" placeholder="CLAVEH" class="input-48" required>
				<input type="text" name="CLAVE" placeholder="CLAVE" class="input-48" required>
				<input type="text" name="UBICACION" class="input-48" placeholder="UBICACION"required>
				
				<br>
				<br>
				<input type="submit" value="Enviar" class="boton">
			</form>
		</div>
	</body>
</html>