<?php 
include("conexion.php");
$rst_usuario=mysql_query("SELECT * FROM usuario WHERE nom_usuario='". $_POST["txtusuario"] ."'and clave_usuario='". $_POST["txtclave"] ."'",$conexion);
$num_registros=mysql_num_rows($rst_usuario);
if ($num_registros>0)
{
$fila=mysql_fetch_array($rst_usuario);
setcookie("usuario_nombre",$fila["nom_usuario"]);
setcookie("usuario_factor",$fila["tipo_usuario"]);
session_start();
$_SESSION["usuariosesion"]=$fila["tipo_usuario"];

//validar acceso a formularios
if($_SESSION["usuariosesion"]=="Usuario")
{
header("location:visitante.php");
}
else{
header("location:administrador.php");
	}
}

else{
echo"El Usuario o la Clave es incorrecta";
mysql_close($conexion);
}
?>
