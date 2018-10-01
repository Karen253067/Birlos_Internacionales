<!DOCTYPE html>
<html>
<head>
	<title>Registros</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, user-scalable=no, intial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
<style>
table {
	margin-top: 20px;
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 90%;
}

td, th {
    border: 1px solid #dddddd;
    padding: 22%px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
tr:hover td{
	background-color: #369681;
	color: white;
}
thead{background-color: #246355;
	border-bottom: solid 5px #0F362D;
	color: white;
	text-align: center;
}
.main-container{
max-width: 1000px;
box-sizing: border-box;
}
/*//////////PAGINADOR//////////////*/
.pag ul{
	padding: 15px;
	list-style: none;
	background: #fff;
	margin-top: 15px;
	display: -webkit-flex;
	display: -moz-flex;
	display: -ms-flex;
	display: -o-flex;
	display: flex;
	justify-content: flex-end;
}

.pag a, .pageSelected{
	color: #428bca;
	border:1px solid #ddd;
	padding: 5px;
	display: inline-block;
	font-size: 14px;
	text-align: center;
	width: 35px;
}
.pag a:hover{
	background:#ddd;
}
.pageSelected{
	color: #FFF;
	background: #428bca;
	border: 1px solid #428bca;
}
.bimagenmod{
	  background-image:url(../images/edit.png);
	    background-repeat:no-repeat;
  height:30px;
  width:30px;
  outline: none;
  background-position:center;
  display: inline-block;
	border: none;
}
.bimageneli{
	  background-image:url(../images/x.png);
	    background-repeat:no-repeat;
  height:26px;
  width:26px;
  outline: none;
  background-position:center;
  display: inline-block;
  border-radius: 10px;
	border: none;
}
.botonI{
	font:20px Arial;
	text-decoration: none;
	color:white;
	border:4px solid #0F362D;
	padding: 10px 50px;
	border-radius: 5px;
	background-color: #246355;
	float: none;
	margin-left: 12%;

}
h1{
text-align: center;
letter-spacing: 6pt;
word-spacing: 4pt;
line-height: 1.6;
}
h2{
	margin-bottom: 10px; 
	text-align: center;
}
	</style>

	<div class="intro">
		<a class="botonI" href="index.php">Inicio</a>
		<a class="botonI" href="formularioas.php">Nuevo+</a>
		<a class="botonI" href="exportaras.php">Exportar Csv</a>
		<h1>Birlos Internacionales</h1>
		<h2>Registro por equivalencias</h2>
		
	</div>	
<?php
	include('conexion.php');

	///PAGINADOR///////////

	$sql_registe = mysqli_query($conexion, "SELECT COUNT(*) as total_registro FROM EQUI WHERE UBICACION > 0 ");
	$result_register = mysqli_fetch_array($sql_registe);
	$total_registro = $result_register['total_registro'];

	$por_pag = 50;
	if (empty($_GET['pagina'])) {
		$pagina=1;
	}else{
		$pagina=$_GET['pagina'];
	}
$desde = ($pagina-1) * $por_pag;
$total_pagina = ceil($total_registro / $por_pag);

	$quer="SELECT * FROM EQUI ORDER BY ID_EQUI ASC LIMIT $desde, $por_pag ";
	$result = $conexion->query($quer); 
	if ($result->num_rows > 0){
		//CABECERA DE TABLA
		echo "<center><table>";
		echo"<thead><tr><th>CLAVE</th>
		<th>HERCULES</th>
		<th>CLAVE</th>
		<th>UBICACION</th>
		<th></th>
		<th></th>
		</tr></thead>";
while($rows=$result->fetch_assoc() ){
	//VARIABLES DE BD
	echo "<tr><td>".$rows["ID_EQUI"].
	"</td><td>".$rows["CLAVEH"].
	"</td><td>".$rows["CLAVE"].
	"</td><td>".$rows["UBICACION"]."</td>
	<td><form method=post action=borrar.php><input type=submit class='bimageneli' value= ><input type='hidden' id='ID_EQUIid' name='ID_EQUIid' value='".$rows["ID_EQUI"]."'></form></td><td><form method=post action=editar.php><input type=submit class='bimagenmod' value= ><input type='hidden' id='ID_EQUIid' name='ID_EQUIid' value='".$rows["ID_EQUI"]."'></form></td></tr>";
} 
 	echo "</center></table>";
}
    
mysqli_close($conexion);
?>
<div class="pag">
	<ul>
		<?php 
		if ($pagina != 1) {
		?>
	<li><a href="?pagina=<?php echo 1; ?>">|<</a></li>
	<li><a href="?pagina=<?php echo $pagina -1; ?>"><<</a></li>
	<?php 
}
	for ($i=1; $i <= $total_pagina; $i++) { 
		if($i==$pagina){
			echo '<li class="pageSelected">'.$i.'</li>';
		}else{
				echo '<li><a href="?pagina='.$i.'">'.$i.'</a></li>';
		}
	}
		if ($pagina != $total_pagina) 
		{
	?>
	<li><a href="?pagina=<?php echo $pagina + 1; ?>">>></a></li>
	<li><a href="?pagina=<?php echo $total_pagina; ?>">>|</a></li>

	 <?php }  ?>

	</ul>
</div>
</body>
</html>