<?Php
include("conexion.php");


//llenar tabla
$rst_libros=mysql_query("select * from libros ",$conexion);
$num_registro=mysql_num_rows($rst_libros);

$registros=5;
$pagina= $_REQUEST["num"];
if(is_numeric($pagina))
$inicio=(($pagina-1)*$registros);
else
$inicio=0;
//paginador
$rst_libros=mysql_query("select * from libros LIMIT $inicio,$registros;",$conexion);
$paginas=ceil($num_registro/$registros);


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
		 <h2>Modulo Inventario</h2>
	   <p>&nbsp;</p>
		 <div class="welcm_sec">
		   <div class="center-block">
			 <div class="campus_head">
					 <h3>Visualizar Libros Totales</h3>
			   <p></p>
			 </div>
			 <form name="Crear_Libros" method="post" action="subir_libros.php">
			   <div class="clearfix">
			     <div class="bs-example">
			       <table class="table">
			         <tr>
			           <td width="10%">ISBN</td>
			           <td width="14%"><label for="txt_isbn">Dewey</label></td>
			           <td width="12%">Titulo</td>
			           <td width="12%">Autor</td>
			           <td width="12%">Editorial</td>
			           <td width="12%">Ejemplares</td>
			           <td width="12%">Modificar</td>
			           <td width="16%">Eliminar</td>
		             </tr>
                     <?php 
			  
			  			while($fila=mysql_fetch_array($rst_libros))
			  			{
			  		 ?>
			         <tr>
			           <td><?php echo $fila["isbn"];?></td>
			           <td><?php echo $fila["dewey"];?></td>
			           <td><?php echo $fila["titulo"];?></td>
			           <td><?php echo $fila["autor"];?></td>
			           <td><?php echo $fila["editorial"];?></td>
			           <td><?php echo $fila["ejemplares"];?></td>
			           <td><a href="modificar_libros.php?id=<?php echo $fila["isbn"];?>">Modificar</a></td>
			           <td><a href="eliminarusuario.php?archivo=<?php echo $fila["ejemplares"];?>">Eliminar</a></td>
		             </tr>
                     <?php 
			  			}
			  		 ?>
		           </table>
                   <p>
                   			<?php 
			  if($pagina>1)
			  echo "<a href='inventario.php?num=". ($pagina-1) ."'>  Anterior</a> ";
			  for ($cont=1;$cont<=$paginas;$cont++)
			  {
				  if($cont==$pagina)
				  echo $cont ." ";
				  else
				  echo "<a href='inventario.php?num=". $cont ."'>$cont</a> ";
			  }
			  if($pagina<$paginas)
			  echo "<a href='inventario.php?num=". ($pagina+1) ."'>  Siguiente</a> ";
			 
		  ?>
          </p>
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