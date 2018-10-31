<?php
include("conexion.php");

$NOMBRE=$_POST['NOMBRE'];
$CORREO=$_POST['CORREO'];
$USUARIO=$_POST['USUARIO'];
$CLAVE=$_POST['CLAVE'];
$ID_ROL=$_POST['ID_ROL'];

$query="INSERT INTO USUARIO(NOMBRE, CORREO, USUARIO, CLAVE, ID_ROL) VALUES('$NOMBRE','$CORREO','$USUARIO','$CLAVE','$ID_ROL')";
$resultado=$conexion->query($query);
?>

<script language="javascript">alert("Usuario nuevo agregado :)");</script>';
  <script> location.href='tablares.php' </script>