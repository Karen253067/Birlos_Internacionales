<?php
//include database configuration file
include 'conexion.php';
$query = "SELECT * FROM DIAMETRO ORDER BY CLAVE DESC";
$result = mysqli_query($conexion, $query);
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=Astreado.csv');
$output = fopen('php://output', 'w');
fputcsv($output, array('CLAVE', 'PUL', 'MM', 'MEDIDA', 'PASO', 'DESCRIP', 'UBICACION'));
while($row=mysqli_fetch_assoc($result))
{
    fputcsv($output,$row);
}
fclose($output);
?>