<?php
include('conexion.php');
$objeto_Con=new conexion();
$objeto_Con->conectar();

?>
<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
	<title>Direccion IP</title>
	<link rel="stylesheet" type="text/css" href="vista.css">

	<!--Estilos de bootstrap  -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="bootstrap/bootstrap-table/src/bootstrap-table.css">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
  <title>all casos</title>
       
  <script src="bootstrap/bootstrap-table/src/locale/bootstrap-table-es-ES.js"></script>

 <script src="bootstrap/jquery-2.1.4.js"></script>
 <script src="bootstrap/js/bootstrap.min.js"></script>
 <script src="bootstrap/bootstrap-table/src/bootstrap-table.js"></script>
 <script src="bootstrap/bootstrap-table/src/locale/bootstrap-table-es-ES.js"></script>
  
  <!-- Ventana emergente    -->

</head>
<body>
<center>
<div id="ADM">
<div id="banner">

<img id="cintillo" src="Img_Acreditable.jpg"><img id="Cintillo2" src="Img_Acreditable3.jpg">

</div>


	<div id="Gestion">
	<div id="Infor">
	<table>
	<tr><td><a href="index.html">Inicio</a></td></tr>
<tr><td><a href="Direccion_IP.html">Direcciones IP</a></td></tr>
<tr><td> <a href="Clases_De_Direcciones_IP.html">Clases de Direcciones</a></td></tr>
   <tr><td><a href="Direcciones_Privadas.html">Direcciones Privadas</a> </td></tr>
   <tr><td><a href="Direcciones_Reservadas.html">Direciones Reservadas</a></td></tr>
   <tr><td><a href="RegistroUsuario.php">Registrate</a></td></tr>

</table>
<div id="Subcripcion">
<form action="controlador.php" method="POST">
SUSCRÍBETE AL BOLETÍN MENSUAL
<input class="Input" type="text" name="Nombre" placeholder="Nombre..." required><br>
<div id="InputEmail">
<input class="Input" type="email" name="Email" placeholder="Email..." required><br>
</div>
<button class="ButtonSub" type="submit">Suscribirse</button>
</form>
<form action="" method="">
<button class="ButtonVer" type="submit" >Ver suscripción</button>
</form>

</div>
</div>
	</div>

	
	<div id="DirecIp">


	<?php

	$var=mysql_query("SELECT * FROM suscripcion");
	echo '<table border="3" 
 data-toggle="table"
       data-height="250"
       data-url="resultado_tabla.php"      
       data-search="true"
       data-pagination="true"';

	echo '<tr>';
echo '<thead class="th">';
 echo '<th data-field="id"><p class="p">SUSCRIPCION</p></th> ';
 echo '<th data-field="nombre" > <p class="p">NOMBRE</p></th>';
 echo '<th data-field="email"> <p class="p">EMAIL </p></th>';


echo '</thead>';
 echo '</tr>';

	while($extraer=mysql_fetch_array($var)){

	echo '<tr class="Pagina">';
	echo '<td>'.$extraer['id'].'</td>';
	echo '<td>'.$extraer['nombre'].'</td>';
	echo '<td>'.$extraer['email'].'</td>';
	echo '</tr>';

	}
	
	echo '</table>'
	?>

	</div>
	<a href=""> Copyright(R) Luis Hernandez & Vanesa Viña</a>
	</div>

	</center>


</body>
</html>
