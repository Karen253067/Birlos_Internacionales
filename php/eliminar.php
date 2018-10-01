
<!DOCTYPE html>
<html>
<head>
	<title>Eliminar</title>
</head>
<body>
	<?php
	include("conexion.php");
	  $ID=$_REQUEST['ID'];
	  $query = "DELETE FROM USUARIO WHERE ID ='$ID'";
	  $result=$conexion->query($query);
?>

<script language="javascript">alert("Usuario elminado :)");</script>';
  <script> location.href='tablares.php' </script>
</body>
</html>