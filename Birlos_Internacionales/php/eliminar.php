
<!DOCTYPE html>
<html>
<head>
	<title>Eliminar</title>
</head>
<body>
	<?php
	include("conexion.php");
	  $CLAVE=$_REQUEST['CLAVE'];
	  $query = "DELETE FROM DIAMETRO WHERE CLAVE ='$CLAVE'";
	  $result=$conexion->query($query);
?>

<script language="javascript">alert("Birlo elminado :)");</script>';
  <script> location.href='tabla.php' </script>
</body>
</html>