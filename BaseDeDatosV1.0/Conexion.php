<?php
//La información siguiente hay que verla de tu computadora  IP= localhost, Usuario=root, contraseña="pass" y nombre base de datos=cbdunidad2
	          $mysqli=new mysqli("localhost","root","","generacion99-96");   
		if(mysqli_connect_errno()){
		echo 'Conexion no responde : ', mysqli_connect_error();
		exit();
	}
