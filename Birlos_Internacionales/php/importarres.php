<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Importacion CSV</title>
</head>
<body>
	<section id="container">
			<div class="intro">
		<a class="botonI" href="index.php">Inicio</a>
		<h1>Birlos Internacionales</h1>
		<h2>Importación de usuario</h2>
		
	</div>
		<div class="form_register">
			<hr>
			<div class="alert"><?php echo isset($alert) ? $alert : ''; ?></div>
			<form action='accion.php' method='post' enctype="multipart/form-data">
   <input type='file' name='sel_file' size='20'>
   <input type='submit' name='submit' value='Enviar'>
			<form id="subida">
</form>


		</div>
	</section>
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
</body>
</html>