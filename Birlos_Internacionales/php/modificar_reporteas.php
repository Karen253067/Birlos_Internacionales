<?php
include("conexion.php");
$ID_EQUI=$_REQUEST['ID_EQUI'];
$CLAVEH=$_POST['CLAVEH'];
$CLAVE=$_POST['CLAVE'];
$UBICACION=$_POST['UBICACION'];

$query="UPDATE EQUI SET CLAVEH='$CLAVEH',CLAVE='$CLAVE', UBICACION='$UBICACION' WHERE ID_EQUI='$ID_EQUI'";
$resultado=$conexion->query($query);

if ($resultado) {
	print '<script language="JavaScript">'; 
print 'alert("Registro guardado exitosamente");'; 
print '</script>'; 
header('Location:tablaas.php');

}else{
	echo "te chngaste";
}
?>