<!DOCTYPE html>
<html>
	<head>
		<title>Birlos Internacionales</title>
		<link rel="stylesheet" type="text/css" href="../css/inicio1.css">
	</head>
	<body>
		<a class="botonI" href="index.php">Inicio</a>
		<h1>Birlos Internacionales</h1>
			<form action="guardar.php" method="POST" class="form-regis">
				<h2 class="titulo">Alta De Birlos</h2>
		<div class="contenedor-input">
			
				<input type="text" name="CLAVE"  placeholder="Clave"class="input-48"Clave INternacional" required>
				<input type="text" name="PUL" placeholder="Pulgadas" class="input-48" required>
				<input type="text" name="MM" placeholder="Milímetros" class="input-48" required>
				<input type="text" name="MEDIDA" class="input-48" placeholder="Medida"required>
				<input type="text" name="PASO" placeholder="Paso" class="input-48" required>
				<input type="text" name="UBICACION" placeholder="Ubicación" class="input-48" required>
				<input type="text" name="DESCRIP" placeholder="Descripción" class="input-100" required>
				
				<br>
				<br>
				<input type="submit" value="Enviar" class="boton">
			</form>
		</div>
	</body>
</html>