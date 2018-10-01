<?php
include("conexion.php");

$CLAVE=$_POST['CLAVE'];
$PUL=$_POST['PUL'];
$MM=$_POST['MM'];
$MEDIDA=$_POST['MEDIDA'];
$PASO=$_POST['PASO'];
$DESCRIP=$_POST['DESCRIP'];
$UBICACION=$_POST['UBICACION'];

$query="INSERT INTO DIAMETRO(CLAVE, PUL, MM, MEDIDA, PASO, DESCRIP, UBICACION) VALUES('$CLAVE','$PUL','$MM','$MEDIDA','$PASO','$DESCRIP','$UBICACION')";
$resultado=$conexion->query($query);

?>
<script language="javascript">alert("Birlo nuevo agregado conexion exitosa :)");</script>';
  <script> location.href='tabla.php' </script>