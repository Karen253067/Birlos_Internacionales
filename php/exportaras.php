<?php
//include database configuration file
include 'conexion.php';
$query = "SELECT * FROM EQUI ORDER BY CLAVEH DESC";
$result = mysqli_query($conexion, $query);
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=Equivalencias.csv');
$output = fopen('php://output', 'w');
fputcsv($output, array('ID_EQUI', 'CLAVEH', 'CLAVE', 'MEDIDA', 'UBICACION'));
while($row=mysqli_fetch_assoc($result))
{
    fputcsv($output,$row);
}
fclose($output);
?>