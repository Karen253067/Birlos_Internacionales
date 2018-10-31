<!DOCTYPE html>
<html>
	<head>
		<title>Birlos Internacionales</title>
		<link rel="stylesheet" type="text/css" href="../css/inicio1.css">
	</head>
	<body>
		<h1>Birlos Internacionales</h1>
		<?php 
		 $ID_EQUI=$_REQUEST['ID_EQUI'];
  include("conexion.php");
  $query="SELECT * FROM EQUI where ID_EQUI='$ID_EQUI'";
  $result=$conexion->query($query);
  $mostrar = mysqli_fetch_array($result);
 ?>
			<form action="modificar_reporteas.php?ID_EQUI=<?php echo $mostrar['ID_EQUI']; ?>" method="POST" class="form-regis">
				<h2 class="titulo">Modficacion Equi</h2>

		<div class="contenedor-input">
			
				<input type="text" name="ID_EQUI"  placeholder="ID_EQUI"class="input-48" value="<?php echo $mostrar['ID_EQUI']; ?>"required>
				<input type="text" name="CLAVEH" placeholder="CLAVEH" class="input-48" value="<?php echo $mostrar['CLAVEH']; ?>"required>
				<input type="text" name="CLAVE" placeholder="CLAVE" class="input-48" value="<?php echo $mostrar['CLAVE']; ?>"required>
				<input type="text" name="UBICACION" class="input-48" placeholder="UBICACION" value="<?php echo $mostrar['UBICACION']; ?>"required>				
				<br>
				<br>
				<input type="submit" value="Enviar" class="boton">
			</form>
		</div>
	</body>
</html>