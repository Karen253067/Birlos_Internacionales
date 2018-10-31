<!DOCTYPE html>
<html>
	<head>
		<title>Birlos Internacionales</title>
		<link rel="stylesheet" type="text/css" href="../css/inicio1.css">
	</head>
	<body>
		<h1>Birlos Internacionales</h1>
		<?php 
		 $CLAVE=$_REQUEST['CLAVE'];
  include("conexion.php");
  $query="SELECT * FROM DIAMETRO where CLAVE='$CLAVE'";
  $result=$conexion->query($query);
  $mostrar = mysqli_fetch_array($result);
 ?>
			<form action="modificar_reporte.php?CLAVE=<?php echo $mostrar['CLAVE']; ?>" method="POST" class="form-regis">
				<h2 class="titulo">Alta MEDIDAs</h2>

		<div class="contenedor-input">
			
				<input type="text" name="CLAVE"  placeholder="Clave" class="input-48" value="<?php echo $mostrar['CLAVE']; ?>" required>
				<input type="text" name="PUL" placeholder="Pulgadas" class="input-48" value="<?php echo $mostrar['PUL']; ?>" required>
				<input type="text" name="MM" placeholder="Milímetros" class="input-48" value="<?php echo $mostrar['MM']; ?>"required>
				<input type="text" name="MEDIDA" class="input-48" placeholder="Medida" value="<?php echo $mostrar['MEDIDA']; ?>" required>
				<input type="text" name="PASO" placeholder="Paso" class="input-48" value="<?php echo $mostrar['PASO']; ?>" required>
				<input type="text" name="UBICACION" placeholder="Ubicación" class="input-48" value="<?php echo $mostrar['UBICACION']; ?>"required>
				<input type="text" name="DESCRIP" placeholder="Descripción" class="input-100" value="<?php echo $mostrar['DESCRIP']; ?>"required>				
				<br>
				<br>
				<input type="submit" value="Enviar" class="boton">
			</form>
		</div>
	</body>
</html>