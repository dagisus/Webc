<?php 
// Recoge el comentario del formulario
$isbn = $_REQUEST["txt_isbn"];
$dewey = $_REQUEST["txt_dewey"];
$titulo = $_REQUEST["txt_titulo"];
$autor = $_REQUEST["txt_autor"];
$editorial = $_REQUEST["txt_editorial"];
$ejemplares = $_REQUEST["txt_ejemplares"];
$usuario = $_COOKIE["usuario_nombre"];

$conexion = mysql_connect("localhost","root");
mysql_select_db("proyecto", $conexion);
$sentencia = "INSERT INTO libros (isbn, dewey, titulo, autor, editorial, ejemplares) VALUES ('" . $isbn . "','" . $dewey . "','" . $titulo . "','" . $autor . "','" . $editorial . "','" . $ejemplares . "')";
$resultado = mysql_query($sentencia, $conexion);
 if ($resultado) {
	 
 // echo "El fichero se ha subido al servidor correctamente\n";

   header("location:administrador.php");
 }

else {
echo "no se ha podido guardar";
}
?>