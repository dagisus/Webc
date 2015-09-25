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
				 <a href="index.html"><img src="images/logo.jpg" alt=""/></a>
			 </div>
			 <div class="top-menu">
				 <span class="menu"></span>
				 <ul class="navig">
			     <li><a href="index.php">Inicio</a></li>
			     <li><a href="servicios.php">Servicios</a></li>
			     <li><a href="blog.php">Blog</a></li>
			     <li><a href="galeria.php">Galeria</a></li>
			     <li class="active"><a href="acerca.php">Acerca De</a></li>
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
<div class="about-sec">
	 <div class="container">
		  <div class="about-head">
			<h2>Acerca De</h2>
			<h4>Etiam in enim laoreet neque feugiat neque.</h4>
			<p>Suspendisse egestas ut nisi ac gravida. Suspendisse eget ipsum non mi luctus facilisis ac et nisi. 
			Aliquam et neque sit amet tellus scelerisque interdum vel id turpis. Nunc lacinia nec ex id porta. Praesent sagittis massa sit amet nulla varius porttitor non eget nulla. Sed non finibus augue.
			quis feugiat turpis placerat quis.</p>	
		  </div>
		  <div class="video-grid">
			 <div class="col-md-6 video">
				 <iframe src="https://player.vimeo.com/video/78554725?color=741731&title=0&byline=0&portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> 
			 </div>
			 <div class="col-md-6 video-info">
				 <h3>Curabitur vehicula eros eget porta iaculis.</h3>
				 <h4>Donec tristique est id tristique tempor.</h4>
				 <p>Vivamus id magna pretium, pretium orci nec, vestibulum enim. Vivamus sed massa porttitor, lacinia tortor a, luctus mi. 
				 Donec sit amet justo sit amet risus malesuada venenatis id ac lacus.Pellentesque sed urna sed dui fermentum vulputate. Nulla facilisi. Mauris eget risus non quam convallis semper non ut turpis.</p>
				 <h4>Nam interdum justo id tortor gravida.</h4>
				 <p>Vivamus id magna pretium, pretium orci nec, vestibulum enim. Vivamus sed massa porttitor, lacinia tortor a, luctus mi. 
				 Donec sit amet justo sit amet risus malesuada venenatis id ac lacus.</p>
			 </div>
			 <div class="clearfix"></div>
		  </div>
		  <div class="our_work">
			 <h3>Donde puede ser usado</h3>
			 <div class="blog-section">				 
					 <div class="col-md-3 camp-grid">
						 <a href="#"><img src="images/u1.jpg" class="img-responsive" alt=""/></a>
					   <h4><a href="#">Universidades</a></h4>
						 <p>Quisque volutpat odio sit amet mi volutpat, a bibendum ante vulputate. Praesent bibendum lorem 
						 non sem cursus, eu tempus leo condimentum. Sed nec ullamcorper massa.</p>
						 <a href="#" class="more">[ Read More..]</a>
					 </div>
					 <div class="col-md-3 camp-grid">
						 <a href="#"><img src="images/u2.jpg" class="img-responsive" alt=""/></a>
					   <h4><a href="#">Colegios</a></h4>
						 <p>Quisque volutpat odio sit amet mi volutpat, a bibendum ante vulputate. Praesent bibendum lorem 
						 non sem cursus, eu tempus leo condimentum. Sed nec ullamcorper massa.</p>
						 <a href="#" class="more">[ Read More..]</a>
					 </div>
					 <div class="col-md-3 camp-grid">
						 <a href="#"><img src="images/u3.jpg" class="img-responsive" alt=""/></a>
					   <h4><a href="#">Bibliotecas</a></h4>
						 <p>Quisque volutpat odio sit amet mi volutpat, a bibendum ante vulputate. Praesent bibendum lorem 
						 non sem cursus, eu tempus leo condimentum. Sed nec ullamcorper massa.</p>
						 <a href="#" class="more">[ Read More..]</a>
					 </div>
                     <div class="col-md-3 camp-grid">
						 <a href="#"><img src="images/u4.jpg" class="img-responsive" alt=""/></a>
			       <h4><a href="#">Entidades</a></h4>
						 <p>Quisque volutpat odio sit amet mi volutpat, a bibendum ante vulputate. Praesent bibendum lorem 
						 non sem cursus, eu tempus leo condimentum. Sed nec ullamcorper massa.</p>
						 <a href="#" class="more">[ Read More..]</a>
					 </div>
				  <div class="clearfix"></div>				
			 </div>
		 </div>
	</div>
</div>

<!---->
<div class="footer">
	 <div class="container">
		 <div class="ftr-sec">
			 <div class="col-md-6 ftr-grid">
				 <h3>Lorem ipsum</h3>
			   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ut odio ut quam convallis ultricies. Morbi rutrum lectus tortor. Cras vitae semper mi, et feugiat dolor.</p>
				 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ut odio ut quam convallis ultricies. Morbi rutrum lectus tortor. Cras vitae semper mi, et feugiat dolor.</p>
			 </div>
			 <div class="col-md-3 ftr-grid2">
				 <h3>Paginas</h3>
				 <ul>
					 <li><a href="index.php"><span></span>Inicio</a></li>
					 <li><a href="program.html"><span></span>Servicios</a></li>
					 <li><a href="blog.html"><span></span>Blog</a></li>	
					 <li><a href="gallery.html"><span></span>Galeria</a></li>
                 <li><a href="about.html"><span></span>Acerca De</a></li>
					 <li><a href="contact.html"><span></span>Contacto</a></li>
				 </ul>
			 </div>
			 <div class="col-md-3 ftr-grid3">
			   <h3>Links de Interes</h3>
				 <ul>
					 <li><a href="#"><span></span>Lorem ipsum</a></li>
					 <li><a href="#"><span></span>Lorem ipsum</a></li>
					 <li><a href="#"><span></span>Lorem ipsum</a></li>
					 <li><a href="#"><span></span>Lorem ipsum</a></li>	
					 <li><a href="#"><span></span>Lorem ipsum</a></li>
					 <li><a href="#"><span></span>Lorem ipsum</a></li>
				 </ul>
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