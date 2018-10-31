<?php
//include database configuration file
include 'conexion.php';
$query = "SELECT * FROM USUARIO ORDER BY ID DESC";
$result = mysqli_query($conexion, $query);
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=Usuarios.csv');
$output = fopen('php://output', 'w');
fputcsv($output, array('ID', 'NOMBRE', 'CORREO', 'USUARIO', 'CONTRASEÑA', 'ROL'));
while($row=mysqli_fetch_assoc($result))
{
    fputcsv($output,$row);
}
fclose($output);
?>