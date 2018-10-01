<!DOCTYPE html>
<html>
	<head>
		<title>Birlos Internacionales</title>
		<link rel="stylesheet" type="text/css" href="../css/inicio1.css">
	</head>
	<body>
		<h1>Birlos Internacionales</h1>
		<?php 
		 $ID=$_REQUEST['ID'];
  include("conexion.php");
  $query="SELECT * FROM USUARIO WHERE ID='$ID'";
  $result=$conexion->query($query);
  $mostrar = mysqli_fetch_array($result);
 ?>
			<form action="modificar_reporte.php?ID=<?php echo $mostrar['ID']; ?>" method="POST" class="form-regis">
				<h2 class="titulo">Alta Usuarios</h2>

		<div class="contenedor-input">
			
				<input type="text" name="NOMBRE" placeholder="nombre completo" class="input-100" value="<?php echo $mostrar['NOMBRE']; ?>" required>
				<input type="text" name="COREO" placeholder="Correo" class="input-48" value="<?php echo $mostrar['COREO'];?>" required>
				<input type="text" name="USUARIO" placeholder="Usuario" class="input-48" value="<?php echo $mostrar['USUARIO'];?>" required>
				<input type="text" name="CLAVE" class="input-48" placeholder="Contraseña" value="<?php echo $mostrar['CLAVE'];?>" required>
				<input type="text" name="ID_ROL" placeholder="1 admin 2 usuario" class="input-48" value="<?php echo $mostrar['ID_ROL'];?>" required>
				
				<br>
				<br>
				<input type="submit" value="Enviar" class="boton">
			</form>
		</div>
	</body>
</html>