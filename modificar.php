<?php 
include("conexion.php");

mysql_select_db("proyecto",$conexion);
mysql_query("UPDATE libros SET nom_usuario'". $_POST["txtusuario"] ."' AND clave_usuario='". $_POST["txtclave"] ."' WHERE id_usuario=". $_REQUEST["id"].";", $conexion);  
 
if (mysql_errno()>0)
	echo "Error ". mysql_error();
else
	header("location:inventario.php");
	
mysql_close($conexion);
?>