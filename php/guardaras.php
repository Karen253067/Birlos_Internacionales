<?php
include("conexion.php");

$ID_EQUI=$_POST['ID_EQUI'];
$CLAVEH=$_POST['CLAVEH'];
$CLAVE=$_POST['CLAVE'];
$UBICACION=$_POST['UBICACION'];

$query="INSERT INTO EQUI(ID_EQUI, CLAVEH, CLAVE, UBICACION) VALUES('$ID_EQUI','$CLAVEH','$CLAVE','$UBICACION')";
$resultado=$conexion->query($query);

if ($resultado) {
	echo "Birlo nuevo agregado conexion exitosa :)";
}else{
	echo "te chngaste";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Nuevo</title>
</head>
<body>
<script language="javascript">alert("Registro Guardado");</script>';
  <script> location.href='tablaas.php' </script>
</body>
</html>
