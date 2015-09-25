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
		 <h2><a href="administrador.php">Bienvenido Administrador</a></h2>
	   <p>&nbsp;</p>
		 <div class="welcm_sec">
		   <div class="center-block">
				 <div class="campus_head">
					 <h3>Página de Manejo</h3>
					 <p>Desde este modulo de administrador, puede realizar las siguientes opciones:</p>
				 </div>
				 <div class="col-md-3 wel_grid"> <a href="agregar_libros.php"><img src="images/w1.jpg" class="img-responsive" alt=""/></a>
				   <h5><a href="agregar_libros.php">Agregar Libros</a></h5>
					 <p>Morbi molestie nec ante ultrices. Cum sociis natoque penatibus et magnis dis parturient</p>
				 </div>
				 <div class="col-md-3 wel_grid"> <a href="inventario.php"><img src="images/w3.jpg" class="img-responsive" alt=""/></a>
				   <h5><a href="inventario.php">Gestión Inventarios</a></h5>
					 <p>Morbi molestie nec ante ultrices. Cum sociis natoque penatibus et magnis dis parturient</p>
				 </div>
				 <div class="col-md-3 wel_grid">
					 <img src="images/w2.jpg" class="img-responsive" alt=""/>
					 <h5><a href="#">Modificar Usuarios</a></h5>
					 <p>Morbi molestie nec ante ultrices. Cum sociis natoque penatibus et magnis dis parturient</p>
				 </div>
				 <div class="col-md-3 wel_grid">
					 <img src="images/w4.jpg" class="img-responsive" alt=""/>
					 <h5><a href="#">Futuras Implementaciones</a></h5>
					 <p>Morbi molestie nec ante ultrices. Cum sociis natoque penatibus et magnis dis parturient</p>
				 </div>
				 <div class="clearfix"></div>
				 <div class="more_info"> <a href="salir.php"></a> <a href="salir.php"></a>
				   <table width="50%" border="0" class="table">
				     <tr>
				       <td width="50%"><a href="javascript:history.back(1)">Volver</a></td>
				       <td width="50%"><a href="salir.php">cerrar sesión</a></td>
			         </tr>
			       </table>
		     </div>
		   </div>
			 <div class="clearfix"></div>
	   </div>
  </div>
</div>
<!---->

<!----><!---->
<div class="copywrite">
	 <div class="container">
		 <p>Copyright © 2015 BibSoft Lite. All rights reserved | Adapted by <a href="http://w3layouts.com">Cristian Rondon</a></p>
	 </div>
</div>
<!---->
			 <!-- InstanceEndEditable -->
</body>
<!-- InstanceEnd --></html>