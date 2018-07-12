<?php
	$BD_host="localhost";
	$BD_user="root";
	$BD_pass="";
	$BD_BD="login";
	
	$con=mysqli_connect($BD_host,$BD_user,$BD_pass);
	if (mysqli_connect_errno()){
		echo "No se ha logrado conectar con el host";
	}	
	mysqli_set_charset($con,"UTF-8");

	mysqli_select_db($con,$BD_BD) or die("Error al conectar");

?>