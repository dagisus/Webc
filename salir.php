<?php 
session_start();
session_destroy();
setcookie("usuario","",-36000);
	header("location:index.php");

?>