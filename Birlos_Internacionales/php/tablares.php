<?php
    Include("conexion.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registros</title>
	<meta name="viewport" content="width-device-width, user-scalable=no, intial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
	<meta charset="utf-8">
	<style>
table {
	margin-top: 20px;
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 70%;
}

td, th {
    border: 1px solid #dddddd;
    padding: 20%px;
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
	margin-left: 8%;

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
</head>
<body>
	<div class="intro">
		<a class="botonI" href="index.php">Inicio</a>
		<a class="botonI" href="formulariores.php">Nuevo+</a>
		<a class="botonI" href="exportarres.php">Exportar Csv</a>
		<a class="botonI" href="importarres.php">Importar Csv</a>
		<h1>Birlos Internacionales</h1>
		<h2>Registro de usuario</h2>
		
	</div>
<br>
	<center>
	<table>
		<thead>
		<tr>
			<th>ID</th>
			<th>NOMBRE</th>
			<th>CORREO</th>
			<th>USUARIO</th>
			<th>CONTRASEÑA</th>
			<th>ROL</th>
			<th> </th>
			<th> </th>
		</tr>
	</thead>
	</center>

		<?php 
		$query="SELECT * from USUARIO";
		$result=$conexion->query($query);
		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['ID'] ?></td>
			<td><?php echo $mostrar['NOMBRE'] ?></td>
			<td><?php echo $mostrar['CORREO'] ?></td>
			<td><?php echo $mostrar['USUARIO'] ?></td>
			<td><?php echo $mostrar['CLAVE'] ?></td>
			<td><?php echo $mostrar['ID_ROL'] ?></td>
			<td ><a href="eliminarres.php?ID=<?php echo $mostrar['ID']; ?>"><input type="submit" class="bimageneli" value=""></a></td>
			<td ><a href="modificarres.php?ID=<?php echo $mostrar['ID']; ?>"><input type="submit" class="bimagenmod" value=""></a></td>
		</tr>

	<?php 
	}
	 ?>
	</table>

</body>
</html>