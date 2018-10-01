<?php
include("conexion.php");

$NOMBRE=$_POST['NOMBRE'];
$COREO=$_POST['COREO'];
$USUARIO=$_POST['USUARIO'];
$CLAVE=$_POST['CLAVE'];
$ID_ROL=$_POST['ID_ROL'];

$query="INSERT INTO USUARIO(NOMBRE, COREO, USUARIO, CLAVE, ID_ROL) VALUES('$NOMBRE','$COREO','$USUARIO','$CLAVE','$ID_ROL')";
$resultado=$conexion->query($query);

if ($resultado) {
	print '<script language="JavaScript">'; 
print 'alert("Registro guardado exitosamente");'; 
print '</script>'; 
header('Location:index.php');

}else{
	echo "te chngaste";
}
?>