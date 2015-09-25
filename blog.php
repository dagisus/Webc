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
			     <li class="active"><a href="blog.php">Blog</a></li>
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
<!-- blog-page -->
<div class="blog">
		<div class="container">
			<div class="blog-head">
				<h2>Blog</h2>
			</div>
			<div class="col-md-8 blog-left" >
				<div class="blog-info">
					<h3><a href="#">Fringilla condimentum</a></h3>
					<p>Posted By <a href="#">Admin</a> &nbsp;&nbsp; on march 2, 2015 &nbsp;&nbsp; <a href="#">Comments (10)</a></p>
				  <div class="blog-info-text">
						<div class="blog-img">
							<a href="#"> <img src="images/img12.jpg" alt="" border="0" class="img-responsive zoom-img"/></a>
						</div>
					<p class="snglp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor If you are going to use a passage of Lorem Ipsum,
							you need to be sure there isn't anything embarrassing hidden in the middle of text. 
							There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration  
							in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum,
						  you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
					  <a href="#" class="btn btn-primary hvr-rectangle-in">Read More</a>
					</div>	
				</div>
				<div class="blog-info">
					<h3><a href="#">Fringilla condimentum</a></h3>
					<p>Posted By <a href="#">Admin</a> &nbsp;&nbsp; on march 2, 2015 &nbsp;&nbsp; <a href="#">Comments (10)</a></p>
				  <div class="blog-info-text">
						<div class="blog-img">
							<a href="#"> <img src="images/img13.jpg" alt="" border="0" class="img-responsive zoom-img"/></a>
						</div>
					<p class="snglp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor If you are going to use a passage of Lorem Ipsum,
							you need to be sure there isn't anything embarrassing hidden in the middle of text. 
							There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration  
							in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum,
						  you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
					  <a href="#" class="btn btn-primary hvr-rectangle-in">Read More</a>
					</div>	
				</div>	
				<div class="blog-info">
					<h3><a href="#">Fringilla condimentum</a></h3>
					<p>Posted By <a href="#">Admin</a> &nbsp;&nbsp; on march 2, 2015 &nbsp;&nbsp; <a href="#">Comments (10)</a></p>
				  <div class="blog-info-text">
						<div class="blog-img">
							<a href="#"> <img src="images/img14.jpg" alt="" border="0" class="img-responsive zoom-img"/></a>
						</div>
					<p class="snglp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor If you are going to use a passage of Lorem Ipsum,
							you need to be sure there isn't anything embarrassing hidden in the middle of text. 
							There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration  
							in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum,
						  you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
					  <a href="#" class="btn btn-primary hvr-rectangle-in">Read More</a>
					</div>	
				</div>	
				
			</div>	
			<div class="col-md-3 single-page-right">
				<div class="category blog-ctgry">
					<h4>Categories</h4>
					<div class="list-group">
						<a href="#" class="list-group-item">Cras justo odio</a>
						<a href="#" class="list-group-item">Dapibus ac facilisis in</a>
						<a href="#" class="list-group-item">Morbi leo risus</a>
						<a href="#" class="list-group-item">Porta ac consectetur ac</a>
						<a href="#" class="list-group-item">Vestibulum at eros</a>
						<a href="#" class="list-group-item">Cras justo odio</a>
						<a href="#" class="list-group-item">Cras justo odio</a>
						<a href="#" class="list-group-item">Cras justo odio</a>
					</div>
				</div>	
				<div class="recent-posts">
					<h4>Recent posts</h4>
					<div class="recent-posts-info">
					  <div class="posts-left sngl-img">
							<a href="#"> <img src="images/img16.jpg" class="img-responsive zoom-img" alt=""/> </a>
						</div>
						<div class="posts">
							<label>MARCH 5, 2015</label>
							<h5><a href="#">Finibus Bonorum</a></h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing incididunt.</p>
							<a href="#" class="btn btn-primary hvr-rectangle-in">Read More</a>
						</div>
						<div class="clearfix"> </div>
					</div>	
					<div class="recent-posts-info">
					  <div class="posts-left sngl-img">
							<a href="#"> <img src="images/img17.jpg" class="img-responsive zoom-img" alt=""/></a>
					  </div>
						<div class="posts">
							<label>MARCH 1, 2015</label>
							<h5><a href="#">Finibus Bonorum</a></h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing incididunt.</p>
							<a href="#" class="btn btn-primary hvr-rectangle-in">Read More</a>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>				
			</div>
			<div class="clearfix"> </div>
			<nav>
				<ul class="pagination">
					<li>
						<a href="#" aria-label="Previous">
							<span aria-hidden="true">&laquo;</span>
						</a>
					</li>
					<li><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li>
						<a href="#" aria-label="Next">
							<span aria-hidden="true">&raquo;</span>
						</a>
					</li>
				</ul>
			</nav>
		</div>	
	</div>	
	<!--//blog-->

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