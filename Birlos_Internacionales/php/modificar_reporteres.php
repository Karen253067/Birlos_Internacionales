<?php
include("conexion.php");
$ID=$_REQUEST['ID'];
$NOMBRE=$_POST['NOMBRE'];
$CORREO=$_POST['CORREO'];
$USUARIO=$_POST['USUARIO'];
$CLAVE=$_POST['CLAVE'];
$ID_ROL=$_POST['ID_ROL'];

$query="UPDATE USUARIO SET NOMBRE='$NOMBRE',CORREO='$CORREO', USUARIO='$USUARIO',CLAVE='$CLAVE',ID_ROL='$ID_ROL' WHERE ID='$ID'";
$resultado=$conexion->query($query);

if ($resultado) {
	print '<script language="JavaScript">'; 
print 'alert("Registro guardado exitosamente");'; 
print '</script>'; 
header('Location:tablares.php');

}else{
	echo "te chngaste";
}
?>