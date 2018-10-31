<?php
include("conexion.php");
$CLAVE=$_REQUEST['CLAVE'];
$PUL=$_POST['PUL'];
$MM=$_POST['MM'];
$MEDIDA=$_POST['MEDIDA'];
$PASO=$_POST['PASO'];
$DESCRIP=$_POST['DESCRIP'];
$UBICACION=$_POST['UBICACION'];

$query="UPDATE DIAMETRO SET PUL='$PUL',MM='$MM', MEDIDA='$MEDIDA',PASO='$PASO',DESCRIP='$DESCRIP',UBICACION='$UBICACION' WHERE CLAVE='$CLAVE'";
$resultado=$conexion->query($query);

if ($resultado) {
	print '<script language="JavaScript">'; 
print 'alert("Registro guardado exitosamente");'; 
print '</script>'; 
header('Location:tabla.php');

}else{
	echo "te chngaste";
}
?>