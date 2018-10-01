<!DOCTYPE html>
<html>
	<head>
		<title>Birlos Internacionales</title>
		<link rel="stylesheet" type="text/css" href="../css/inicio1.css">
	</head>
	<body>
		<h1>Birlos Internacionales</h1>
			<form action="guardarres.php" method="POST" class="form-regis">
				<h2 class="titulo">Alta Usuarios</h2>

		<div class="contenedor-input">
			
				<input type="text" name="NOMBRE" placeholder="nombre completo" class="input-100" required>
				<input type="text" name="COREO" placeholder="Correo" class="input-48" required>
				<input type="text" name="USUARIO" placeholder="Usuario" class="input-48" required>
				<input type="text" name="CLAVE" class="input-48" placeholder="Contraseña"required>
				<input type="text" name="ID_ROL" placeholder="1 admin 2 usuario" class="input-48" required>
				
				<br>
				<br>
				<input type="submit" value="Enviar" class="boton">
			</form>
		</div>
	</body>
</html>