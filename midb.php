<?php
	$mysqli=new mysqli("localhost","root","","alacran"); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
?>

<?php
	$link =mysql_connect("localhost","root","");
	if($link){
		mysql_select_db("malibuproductos",$link);
	}
?>