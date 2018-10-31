<!DOCTYPE html>
 <meta charset="UTF-8">
<html>
<title="Modificar">
    </title>
<body>

    <?php
    include("conexion.php");
  $CLAVE=$_REQUEST['CLAVE'];
  $query="SELECT * FROM DIAMETRO where CLAVE='$CLAVE'";
  $result=$conexion->query($query);
  $row = mysqli_fetch_array($result);
  ?>


<form class="alta"   method="post" action="modificar_reporte.php?CLAVE=<?php echo $row['NOMBRE'];?>">



<center> <p>PUL  :<input type="text" required name="PUL" value="<?php echo $row['PUL']; ?>"><br> </p>
<p>MM:<input type="text" required name="MM" value="<?php echo $row['MM']; ?>"><br></p>
<p>MEDIDA :<input type="text" required name="MEDIDA" value="<?php echo $row['MEDIDA']; ?>"><br></p>
<p>PASO   :<input type="text" required name="PASO" value="<?php echo $row['PASO']; ?>"><br></p>
<p>DESCRIPCON   :<input type="text" required name="DESCRIP" value="<?php echo $row['DESCRIP']; ?>"><br></p>
<p>UBICACION   :<input type="text" required name="UBICACION" value="<?php echo $row['UBICACON']; ?>"><br></p>
<input class="Boton" type="Submit" name="enviar" value="Aceptar información"></center>
</form>

</body>
</html>