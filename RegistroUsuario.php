<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Clases de direcciones IP</title>
	<link rel="stylesheet" type="text/css" href="vista.css">


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
	<tr><td><a class="MenOp"href="index.html">Inicio</a></td></tr>
<tr><td><a class="MenOp"href="Direccion_IP.html">Direcciones IP</a></td></tr>
<tr><td> <a class="MenOp"href="Clases_De_Direcciones_IP.html">Clases de Direcciones</a></td></tr>
   <tr><td><a class="MenOp"href="Direcciones_Privadas.html">Direcciones Privadas</a> </td></tr>
   <tr><td><a class="MenOp"href="Direcciones_Reservadas.html">Direciones Reservadas</a></td></tr>
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
<form action="VerSuscripcion.php" method="POST">
<button class="ButtonVer" type="submit" >Ver suscripción</button>
</form>

</div>
</div>
	</div>

	<div id="DirecIp">
    	 <div id="IniciaSesion">
			<form action="IniciaSesion.php" method="POTS">
			<button type="submit" class="ButtonInicio">Iniciar sesion</button><br>
			</form>
		</div>

		<div id="RegisUsuario">
				<form action="RegistrarUsuario.php" method="POTS">
				<input class="Input" type="text" name="nombre" placeholder="Nombre..."><br>
				<input class="Input" type="text" name="apellido" placeholder="Apellido..."><br>
				<input class="Input" type="email" name="correo" placeholder="Email..."><br>
				<input class="Input" type="password" name="contrasena" placeholder="Contraseña.."><br>
				<button class="ButtonRegistro" type="submit">Registrar</button>
			</form>
		</div>

	</div>
	<a href=""> Copyright(R) Luis Hernandez & Vanesa Viña</a>
	</div>
	</center>
	</body>
	</html>
