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
<script src="js/responsiveslides.min.js"></script>
<script>  
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>  
<div class="banner">	  
	 <div class="header">
	   <div class="logo">
				 <a href="#"><img src="images/logo.jpg" alt=""/></a>
	   </div>

			 <div class="top-menu"> <span class="menu"></span>
			   <ul class="navig">
			     <li class="active"><a href="index.php">Inicio</a></li>
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
	 <div class="slider">
		 <div class="caption">
			 <div class="container">
				  <div class="callbacks_container">
					  <ul class="rslides" id="slider">
						    <li><h3>Bienvenido a BibSoft Lite</h3></li>
							<li><h3>Da un recorrido por nuestra web</h3></li>	
							<li><h3>La página aún esta en desarrollo</h3></li>	
					  </ul>	
						<div class="clearfix"></div>
				  </div>
			  </div>
		  </div>
	  </div>
	  <div class="banner-grids">
		  <div class="container">
		    <div class="col-md-9 banner-grid">
		      <h3>Buscador</h3>
		      <div class="banner-grid-sec">
		        <form name="searchform" method="get" action="#" id="searchform" target="_parent">
		          <br>
		          <select name="idx" id="masthead_search">            
		               		            
		            <option value="">Catálogo de biblioteca</option
		            ><option value="ti">Título</option
		            ><option value="au">Autor</option
		            ><option value="su">Tema</option>		            		                
		            <option value="nb">ISBN</option
		            ><option value="callnum">Signatura topográfica</option>
                    
	              </select>
		          <input type="text" id="transl1" name="q">
		          <input value="Buscar" type="submit" id="searchsubmit">
	            </form>
                <p> </p>
		      </div>
	        </div>
		    <div class="col-md-3 banner-grid">
		      <h3>Iniciar Sesión</h3>
		      <div class="banner-grid-sec">
		        <form name="session" id="session" method="post" onSubmit="return validar()" action="Verificar.php" >
		          Usuario:
                  <input type="text" name="txtusuario" id="txtusuario" /><br>
                  Contraseña:
                  <input type="text" name="txtclave" id="txtclave" />
                  <input value="Acceso" type="submit" id="btnenviar">
	            </form>
                <p> </p>
		      </div>
	        </div>
		    <div class="clearfix"></div>
		  </div>
	  </div>
</div>
<!---->
<div class="welcome">
	 <div class="container">
		 <h2>Bienvenido a la pagina de Inicio de BibSoft Lite</h2>
		 <div class="welcm_sec">
			 <div class="col-md-9 campus">
				 <div class="campus_head">
					 <h3>Inicio</h3>
					 <p>Nunc justo sapien, cursus at urna at, placerat porttitor tellus. Aliquam vehicula tellus nunc,
					 id pretium lacus placerat dignissim. Donec quis dui sed lacus vulputate scelerisque a sit amet neque.</p>
				 </div>
				 <div class="col-md-3 wel_grid">
					 <img src="images/w1.jpg" class="img-responsive" alt=""/>
					 <h5><a href="#">Aliquam sit amet</a></h5>
					 <p>Morbi molestie nec ante ultrices. Cum sociis natoque penatibus et magnis dis parturient</p>
				 </div>
				 <div class="col-md-3 wel_grid">
					 <img src="images/w3.jpg" class="img-responsive" alt=""/>
					 <h5><a href="#">Aliquam sit amet</a></h5>
					 <p>Morbi molestie nec ante ultrices. Cum sociis natoque penatibus et magnis dis parturient</p>
				 </div>
				 <div class="col-md-3 wel_grid">
					 <img src="images/w2.jpg" class="img-responsive" alt=""/>
					 <h5><a href="#">Aliquam sit amet</a></h5>
					 <p>Morbi molestie nec ante ultrices. Cum sociis natoque penatibus et magnis dis parturient</p>
				 </div>
				 <div class="col-md-3 wel_grid">
					 <img src="images/w4.jpg" class="img-responsive" alt=""/>
					 <h5><a href="#">Aliquam sit amet</a></h5>
					 <p>Morbi molestie nec ante ultrices. Cum sociis natoque penatibus et magnis dis parturient</p>
				 </div>
				 <div class="clearfix"></div>
				 <div class="more_info">
						 <a href="blog.html">Mas Información....</a>
				 </div>
			 </div>
			 <div class="col-md-3 testimonal">
					<h3>Testimonios</h3>
					<div class="testimnl-grid">
						 <a href="#"><p>Aenean ultrices commodo risus, id sollicitudin nunc commodo at. Sed sagittis, lacus id viverra eleifend, enim magna.</p></a>
						 <h5>Anónimo</h5>
					</div>
					<div class="testimnl-grid">
						 <a href="#"><p>Aenean ultrices commodo risus, id sollicitudin nunc commodo at. Sed sagittis, lacus id viverra eleifend, enim magna.</p></a>
						 <h5>Anónimo</h5>
					</div>
					<div class="testimnl-grid">
						 <a href="#"><p>Aenean ultrices commodo risus, id sollicitudin nunc commodo at. Sed sagittis, lacus id viverra eleifend, enim magna.</p></a>
						 <h5>Anónimo</h5>
					</div>
			 </div>
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!---->
<div class="news">
	 <div class="container">
		 <h3>Fechas Destacadas</h3>
		  <div class="event-grids">			
		     <div class="col-md-3 event-grid">
				 <div class="date">
				     <h4>02</h4>
					 <span>09/2015</span>
				 </div>				 
			     <div class="event-info">
					  <h5><a href="#">Presentacion del Proyecto</a></h5>
						<p>Se debe presentar la pagina web con una conexion a la pagina de administrador.</p>					
				 </div>
				 <div class="clearfix"></div>				 			 
			 </div>
			 <div class="col-md-3 event-grid">
				 <div class="date">
				     <h4>07</h4>
					 <span>10/2015</span>
				 </div>				 
			     <div class="event-info">
					  <h5><a href="#">Segunda Entrega del Proyecto</a></h5>
						<p>Pendiente por contenido.</p>					
				 </div>
				 <div class="clearfix"></div>				 			 
			 </div>
			 <div class="col-md-3 event-grid">
			   <div class="date">
			     <h4>11</h4>
			     <span>11/2015</span> </div>
			   <div class="event-info">
			     <h5><a href="#">Entrega Final del Proyecto</a></h5>
			     <p>Este sera el ultimo para presentar el proyecto.</p>
		       </div>
			   <div class="clearfix"></div>
		    </div>
            <div class="col-md-3 event-grid">
			   <div class="date">
			     <h4>15</h4>
			     <span>11/2015</span> </div>
			   <div class="event-info">
			     <h5><a href="#">Sustentacion del Proyecto</a></h5>
			     <p>Esta sera la fecha para sustentar.</p>
		       </div>
			   <div class="clearfix"></div>
		    </div>
			 <div class="clearfix"></div>	
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