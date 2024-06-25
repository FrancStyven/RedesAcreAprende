<?php
include('conexion.php');
$objet_con=new conexion();
$objet_con->conectar();


$nombre=$_POST['Nombre'];
$email=$_POST['Email'];

$con=mysql_query("SELECT * FROM suscripcion WHERE email='$email'")or die(mysql_error());


	if(mysql_num_rows($con)>0){
		echo'<script>alert("ERROR DE SUSCRIPCION, YA EXITE UNA SUSCRIPCION CON ESE REGISTRO ");</script>';
	echo '<script>window.location="index.html";</script>';
	
	
	}
	else {
		
	
	echo '<script>alert("Confirmar suscripción al boletín de novedades¡Bienvenid@! ");</script>';

$variable=mysql_query("INSERT INTO suscripcion(nombre,email)VALUES('$nombre','$email')")or die(
	mysql_error());
echo'<script>window.location="index.html";</script>';
	}

?>