
<!DOCTYPE html>
<html>
<head>
	<title>Eliminar</title>
</head>
<body>
	<?php
	include("conexion.php");
	  $ID_EQUI=$_REQUEST['ID_EQUI'];
	  $query = "DELETE FROM EQUI WHERE ID_EQUI ='$ID_EQUI'";
	  $result=$conexion->query($query);
?>

<script language="javascript">alert("Registro elminado :)");</script>';
  <script> location.href='tablaas.php' </script>
</body>
</html>