<?Php
include("conexion.php");

//======= Categoria============

$rst_categoria=mysql_query("SELECT * FROM libros WHERE isbn", $conexion);
$numero_registros=mysql_num_rows($rst_categoria);
if ($numero_registros==0){
	echo "No hay categorias";
}
//------------------------------

//==============Datos de Libros------------------

$rst_libros=mysql_query("select * from libros WHERE isbn=". $_REQUEST["isbn"]. ";" ,$conexion);

$rst_libros=mysql_fetch_array($rst_libros);
//--------------------------------------------------

?>
<!DOCTYPE HTML>
<html><!-- InstanceBegin template="/Templates/index.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<title>BibSoft Lite</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary JavaScript plugins) -->
<script src="js/bootstrap.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link rel="stylesheet" href="css/touchTouch.css" type="text/css" media="all" />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="BibSoft Lite, BibSoft" />
<link rel="shortcut icon" href="images/favicon.png">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
 
 <script type="text/javascript">
 function validar(){
	var valido=false; 
	var Usu=document.getElementById("txtusuario").value;
	var Cla=document.getElementById("txtclave").value;
	
	if(Usu=="") {alert("Ingrese Usuario");
	document.session.txtusuario.focus();}
	else if(Cla=="") {alert("Ingrese Contraseña");
	document.session.txtclave.focus();
	
	}else{
		valido=true;
	}
	
return valido;
 }
 </script>

</head>
<body>
			 <!-- InstanceBeginEditable name="todo" -->
<!-- banner --> 
<div class="banner2">	  
	 <div class="header">
	   <div class="logo">
				 <a href="#"><img src="images/logo.jpg" alt=""/></a>
	   </div>
	   <div class="top-menu"> <span class="menu"></span>
	     <ul class="navig">
	       <li><a href="index.php">Inicio</a></li>
	       <li><a href="servicios.php">Servicios</a></li>
	       <li><a href="blog.php">Blog</a></li>
	       <li><a href="galeria.php">Galeria</a></li>
	       <li><a href="acerca.php">Acerca De</a></li>
	       <li><a href="contacto.php">Contacto</a></li>
         </ul>
       </div>
	   <!-- script-for-menu -->
		 <script>
				$("span.menu").click(function(){
					$("ul.navig").slideToggle("slow" , function(){
					});
				});
		 </script>
		 <!-- script-for-menu -->
      
<div class="clearfix"></div>

  </div>
</div>
<!---->
<div class="welcome">
	 <div class="container">
		 <h2>Modulo Modificar</h2>
	   <p>&nbsp;</p>
		 <div class="welcm_sec">
		   <div class="center-block">
			 <div class="campus_head">
					 <h3>Modificar Libros</h3>
			   <p></p>
			 </div>
			 <form name="Modificar_Libros" method="post" action="modificar.php?id=<?php echo $_REQUEST["id"]; ?>">
			   <div class="clearfix">
			     <div class="bs-example">
			       <table class="table">
			         <tr>
			           <td width="50%">ISBN</td>
			           <td width="50%"><label for="txt_isbn"></label>
                       <input name="txt_isbn" type="text" id="txt_isbn" value="<?php echo $rst_libros["isbn"] ?>"></td>
		             </tr>
			         <tr>
			           <td>Dewey</td>
			           <td><label for="txt_dewey"></label>
		               <input name="txt_dewey" type="text" id="txt_dewey" value="<?php echo $rst_libros["dewey"] ?>"></td>
		             </tr>
			         <tr>
			           <td>Titulo</td>
			           <td><label for="txt_titulo"></label>
		               <input name="txt_titulo" type="text" id="txt_titulo" value="<?php echo $rst_libros["titulo"] ?>"></td>
		             </tr>
			         <tr>
			           <td>Autor</td>
			           <td><label for="txt_autor"></label>
		               <input name="txt_autor" type="text" id="txt_autor" value="<?php echo $rst_libros["autor"] ?>"></td>
		             </tr>
			         <tr>
			           <td>Editorial</td>
			           <td><label for="txt_editorial"></label>
		               <input name="txt_editorial" type="text" id="txt_editorial" value="<?php echo $rst_libros["editorial"] ?>"></td>
		             </tr>
			         <tr>
			           <td>Ejemplares</td>
			           <td><label for="txt_ejemplares"></label>
		               <input name="txt_ejemplares" type="text" id="txt_ejemplares" value="<?php echo $rst_libros["ejemplares"] ?>"></td>
		             </tr>
			         <tr>
			           <td colspan="2" align="center"><input type="submit" class="sub-button" id="btnmodificar" value="Modificar"></td>
		             </tr>
		           </table>
		         </div>
		       </div>
		     </form>
<div class="more_info">
			    <a href="salir.php"></a>
          <a href="salir.php"></a>
          <table width="50%" border="0" class="table">
            <tr>
              <td><a href="javascript:history.back(1)">Volver</a></td>
            </tr>
          </table>
</div>
		   </div>
			 <div class="clearfix"></div>
	   </div>
  </div>
</div>
<!---->
<div class="copywrite">
	 <div class="container">
		 <p>Copyright © 2015 BibSoft Lite. All rights reserved | Adapted by <a href="http://w3layouts.com">Cristian Rondon</a></p>
	 </div>
</div>
<!---->
			 <!-- InstanceEndEditable -->
</body>
<!-- InstanceEnd --></html>